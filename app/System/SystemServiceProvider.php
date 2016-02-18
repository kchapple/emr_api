<?php

namespace App\System;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Illuminate\Config;
use Illuminate\Support\ServiceProvider;

class SystemServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$responses = Event::fire('plugins.booting');
        //PluginManager::instance()->bootAll();
        //$responses = Event::fire('plugins.booted');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //$responses = Event::fire('config.loading');
        //Config::addNamespace( 'mi2', __DIR__.'/../config' );
        //$responses = Event::fire('config.loaded');

        //$responses = Event::fire('plugins.registering');
        //PluginManager::instance()->registerAll();
        /* For now, register plugins here, TODO dynamic registration based on path */
        $loader = require base_path() . '/vendor/autoload.php';

        $loader->setPsr4("Mi2\\Emr\\", __DIR__ . "/../../packages/mi2/Emr/src");
        App::register( 'Mi2\Emr\Plugin' );

        $loader->setPsr4("Mi2\\FHIR\\", __DIR__ . "/../../packages/mi2/FHIR/src");
        App::register( 'Mi2\FHIR\Plugin' );

        $loader->setPsr4("PHPFHIRGenerated\\", __DIR__ . "/../../vendor/dcarbone/php-fhir/output/PHPFHIRGenerated");
        //$responses = Event::fire('plugins.registered');

    }
}