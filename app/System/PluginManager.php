<?php

namespace App\System;

use App;
use File;
use Lang;
use View;
use Config;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class PluginManager
{
    use \App\System\Support\Traits\Singleton;

    /**
     * The application instance, since Plugins are an extension of a Service Provider
     */
    protected $app;

    protected $booted = false;

    protected $registered = false;

    protected $pluginsPath = '/packages';

    /**
     * Initializes the plugin manager (called once in Singleton trait constructor)
     */
    protected function init()
    {
        $this->bindContainerObjects();
        $this->pluginsPath = base_path().$this->pluginsPath;
        $this->loadPlugins();
        $this->loadDependencies();
    }

    /**
     * These objects are "soft singletons" and may be lost when
     * the IoC container reboots. This provides a way to rebuild
     * for the purposes of unit testing.
     */
    public function bindContainerObjects()
    {
        $this->app = App::make('app');
    }

    /**
     * Finds all available plugins and loads them in to the $plugins array.
     * @return array
     */
    public function loadPlugins()
    {
        $this->plugins = [];

        /**
         * Locate all plugins and binds them to the container
         */
        foreach ($this->getPluginNamespaces() as $namespace => $path) {
            $this->loadPlugin($namespace, $path);
        }

        return $this->plugins;
    }

    /**
     * Loads a single plugin in to the manager.
     * @param string $namespace Eg: Acme\Blog
     * @param string $path Eg: plugins_path().'/acme/blog';
     * @return void
     */
    public function loadPlugin($namespace, $path)
    {
        $className = $namespace.'\Plugin';
        $classPath = $path.'/Plugin.php';

        // Autoloader failed?
        if (!class_exists($className)) {
            include_once $classPath;
        }

        // Not a valid plugin!
        if (!class_exists($className)) {
            return;
        }

        $classObj = new $className($this->app);
        $classId = $this->getIdentifier($classObj);

        /*
         * Check for disabled plugins
         */
        if ($this->isDisabled($classId)) {
            $classObj->disabled = true;
        }

        $this->plugins[$classId] = $classObj;
        $this->pathMap[$classId] = $path;

        return $classObj;
    }

    /**
     * Runs the register() method on all plugins. Can only be called once.
     * @return void
     */
    public function registerAll()
    {
        if ($this->registered) {
            return;
        }

        foreach ($this->plugins as $pluginId => $plugin) {
            $this->registerPlugin($plugin, $pluginId);
        }

        $this->registered = true;
    }

    /**
     * Registers a single plugin object.
     * @param PluginBase $plugin
     * @param string $pluginId
     * @return void
     */
    public function registerPlugin($plugin, $pluginId = null)
    {
        if (!$pluginId) {
            $pluginId = $this->getIdentifier($plugin);
        }

        if (!$plugin || $plugin->disabled) {
            return;
        }

        $pluginPath = $this->getPluginPath($plugin);
        $pluginNamespace = strtolower($pluginId);

        /*
         * Register plugin class autoloaders
         */
        $autoloadPath = $pluginPath . '/vendor/autoload.php';
        if (File::isFile($autoloadPath)) {
            require_once $autoloadPath;
        }

        if (!self::$noInit || $plugin->elevated) {
            $plugin->register();
        }

        /*
         * Register language namespaces
         */
        $langPath = $pluginPath . '/lang';
        if (File::isDirectory($langPath)) {
            Lang::addNamespace($pluginNamespace, $langPath);
        }

        /*
         * Register configuration path
         */
        $configPath = $pluginPath . '/config';
        if (File::isDirectory($configPath)) {
            Config::package($pluginNamespace, $configPath, $pluginNamespace);
        }

        /*
         * Register views path
         */
        $viewsPath = $pluginPath . '/views';
        if (File::isDirectory($viewsPath)) {
            View::addNamespace($pluginNamespace, $viewsPath);
        }

        /*
         * Add init, if available
         */
        $initFile = $pluginPath . '/init.php';
        if (!self::$noInit && File::exists($initFile)) {
            require $initFile;
        }

        /*
         * Add routes, if available
         */
        $routesFile = $pluginPath . '/routes.php';
        if (File::exists($routesFile)) {
            require $routesFile;
        }
    }

    /**
     * Runs the boot() method on all plugins. Can only be called once.
     */
    public function bootAll()
    {
        if ($this->booted) {
            return;
        }

        foreach ($this->plugins as $plugin) {
            $this->bootPlugin($plugin);
        }

        $this->booted = true;
    }

    /**
     * Registers a single plugin object.
     * @param PluginBase $plugin
     * @return void
     */
    public function bootPlugin($plugin)
    {
        if (!$plugin || $plugin->disabled) {
            return;
        }

        if (!self::$noInit || $plugin->elevated) {
            $plugin->boot();
        }
    }

    /**
     * Returns the directory path to a plugin
     */
    public function getPluginPath($id)
    {
        $classId = $this->getIdentifier($id);
        if (!isset($this->pathMap[$classId])) {
            return null;
        }

        return File::normalizePath($this->pathMap[$classId]);
    }

    /**
     * Check if a plugin exists and is enabled.
     * @param   string $id Plugin identifier, eg: Namespace.PluginName
     * @return  boolean
     */
    public function exists($id)
    {
        return (!$this->findByIdentifier($id) || $this->isDisabled($id))
            ? false
            : true;
    }

    /**
     * Returns an array with all registered plugins
     * The index is the plugin namespace, the value is the plugin information object.
     */
    public function getPlugins()
    {
        return array_diff_key($this->plugins, $this->disabledPlugins);
    }

    /**
     * Returns a plugin registration class based on its namespace (Author\Plugin).
     */
    public function findByNamespace($namespace)
    {
        if (!$this->hasPlugin($namespace)) {
            return null;
        }

        $classId = $this->getIdentifier($namespace);
        return $this->plugins[$classId];
    }

    /**
     * Returns a plugin registration class based on its identifier (Author.Plugin).
     */
    public function findByIdentifier($identifier)
    {
        if (!isset($this->plugins[$identifier])) {
            $identifier = $this->normalizeIdentifier($identifier);
        }

        if (!isset($this->plugins[$identifier])) {
            return null;
        }

        return $this->plugins[$identifier];
    }

    /**
     * Checks to see if a plugin has been registered.
     */
    public function hasPlugin($namespace)
    {
        $classId = $this->getIdentifier($namespace);
        return isset($this->plugins[$classId]);
    }

    /**
     * Returns a flat array of vendor plugin namespaces and their paths
     */
    public function getPluginNamespaces()
    {
        $classNames = [];

        foreach ($this->getVendorAndPluginNames() as $vendorName => $vendorList) {
            foreach ($vendorList as $pluginName => $pluginPath) {
                $namespace = '\\'.$vendorName.'\\'.$pluginName;
                $namespace = '\\'.ltrim($namespace, '\\');
                $classNames[$namespace] = $pluginPath;
            }
        }

        return $classNames;
    }

    /**
     * Returns a 2 dimensional array of vendors and their plugins.
     */
    public function getVendorAndPluginNames()
    {
        $plugins = [];

        $dirPath = $this->pluginsPath;
        if (!File::isDirectory($dirPath)) {
            return $plugins;
        }

        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath));
        $it->setMaxDepth(3);
        $it->rewind();

        while ($it->valid()) {
            if (($it->getDepth() > 1) && $it->isFile() && (strtolower($it->getFilename()) == "plugin.php")) {
                $filePath = dirname($it->getPathname());
                $pluginName = basename($filePath);
                $vendorName = basename(dirname($filePath));
                $plugins[$vendorName][$pluginName] = $filePath;
            }

            $it->next();
        }

        return $plugins;
    }

    /**
     * Returns a plugin identifier from a Plugin class name or object
     * @param mixed Plugin class name or object
     * @return string Identifier in format of Vendor.Plugin
     */
    public function getIdentifier($namespace)
    {
        $namespace = '\\'.ltrim($namespace, '\\');
        if (strpos($namespace, '\\') === null) {
            return $namespace;
        }

        $parts = explode('\\', $namespace);
        $slice = array_slice($parts, 1, 2);
        $namespace = implode('.', $slice);
        return $namespace;
    }

    /**
     * Cross checks all plugins and their dependancies, if not met plugins
     * are disabled and vice versa.
     */
    protected function loadDependencies()
    {
        foreach ($this->plugins as $id => $plugin) {
            if (!$required = $this->getDependencies($plugin)) {
                continue;
            }

            $disable = false;
            foreach ($required as $require) {
                if (!$this->hasPlugin($require)) {
                    $disable = true;
                }
                elseif (($pluginObj = $this->findByIdentifier($require)) && $pluginObj->disabled) {
                    $disable = true;
                }
            }

            if ($disable) {
                $this->disablePlugin($id);
            }
            else {
                $this->enablePlugin($id);
            }
        }
    }

    /**
     * Returns the plugin identifiers that are required by the supplied plugin.
     * @param  string $plugin Plugin identifier, object or class
     * @return array
     */
    public function getDependencies($plugin)
    {
        if (is_string($plugin) && (!$plugin = $this->findByIdentifier($plugin))) {
            return false;
        }

        if (!isset($plugin->require) || !$plugin->require) {
            return null;
        }

        return is_array($plugin->require) ? $plugin->require : [$plugin->require];
    }

    /**
     * Sorts a collection of plugins, in the order that they should be actioned,
     * according to their given dependencies. Least dependent come first.
     * @param  array $plugins Object collection to sort, or null to sort all.
     * @return array Collection of sorted plugin identifiers
     */
    public function sortByDependencies($plugins = null)
    {
        if (!is_array($plugins)) {
            $plugins = $this->getPlugins();
        }

        $result = [];
        $checklist = $plugins;

        $loopCount = 0;
        while (count($checklist)) {

            if (++$loopCount > 999) {
                throw new ApplicationException('Too much recursion');
            }

            foreach ($checklist as $code => $plugin) {

                /*
                 * Get dependencies and remove any aliens
                 */
                $depends = $this->getDependencies($plugin) ?: [];
                $depends = array_filter($depends, function ($pluginCode) use ($plugins) {
                    return isset($plugins[$pluginCode]);
                });

                /*
                 * No dependencies
                 */
                if (!$depends) {
                    array_push($result, $code);
                    unset($checklist[$code]);
                    continue;
                }

                /*
                 * Find dependencies that have not been checked
                 */
                $depends = array_diff($depends, $result);
                if (count($depends) > 0) {
                    continue;
                }

                /*
                 * All dependencies are checked
                 */
                array_push($result, $code);
                unset($checklist[$code]);
            }

        }

        return $result;
    }
}