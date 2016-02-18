<?php

namespace App\System;

use Illuminate\Support\ServiceProvider;

abstract class PluginBase extends ServiceProvider
{
    /**
     * @var array Plugin dependencies
     */
    public $require = [];


    /**
     * name
     * description
     * author
     *
     * @return array
     */
    public abstract function pluginDetails();


    /**
     * Register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot()
    {
    }
}