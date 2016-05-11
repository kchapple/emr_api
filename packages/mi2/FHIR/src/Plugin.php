<?php

namespace Mi2\FHIR;

use App\System\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Mi2\Emr\Contracts\AuditEventAdapterInterface', 'Mi2\FHIR\Adapters\FHIRAuditEventAdapter');
        $this->app->bind('Mi2\Emr\Contracts\PatientAdapterInterface', 'Mi2\FHIR\Adapters\FHIRPatientAdapter');
        $this->app->bind('Mi2\Emr\Contracts\BundleAdapterInterface', 'Mi2\FHIR\Adapters\FHIRBundleAdapter');
        $this->app->bind('Mi2\Emr\Contracts\PatientRepositoryInterface', 'Mi2\Emr\OpenEMR\Repositories\PatientRepository');

        // This will load routes file at vendor/[vendor]/[package]/src/Http/routes.php
        // and prepend it with Foo\Http\Controllers namespace
        $this->app['router']->group(['namespace' => 'Mi2\FHIR\Http\Controllers'], function () {
            require __DIR__.'/Http/routes.php';
        });
    }
}