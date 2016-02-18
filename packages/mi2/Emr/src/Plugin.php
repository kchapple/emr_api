<?php

namespace Mi2\Emr;

use App\System\PluginBase;

class Plugin extends PluginBase
{
    /**
     * Create a new Skeleton Instance
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Emr',
            'description' => 'Emr Module',
            'author'      => 'Mi2'
        ];
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the OpenEMR implementations to the interface
        $this->app->bind('Mi2\Emr\Contracts\PatientRepositoryInterface', 'Mi2\Emr\OpenEMR\Repositories\PatientRepository');
        $this->app->bind('Mi2\Emr\Contracts\PatientFinderInterface', 'Mi2\Emr\OpenEMR\Finders\PatientFinder');
        $this->app->bind('Mi2\Emr\Contracts\PatientInterface', 'Mi2\Emr\OpenEMR\Eloquent\PatientData', function( $app ) {
            return new \Mi2\Emr\OpenEMR\Eloquent\PatientData();
        });
    }

}
