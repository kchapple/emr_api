<?php

Route::group(['prefix' => 'fhir'], function () {

    // See resource routes in Laravel Docs
    Route::resource('Patient', '\Mi2\FHIR\Http\Controllers\PatientController');
    Route::resource('Patients', '\Mi2\FHIR\Http\Controllers\PatientController');

    Route::resource('conformance', '\Mi2\FHIR\Http\Controllers\ConformanceController');
    Route::resource('metadata', '\Mi2\FHIR\Http\Controllers\ConformanceController');

    Route::get('/', '\Mi2\FHIR\Http\Controllers\BundleController@index');
    Route::post('/', '\Mi2\FHIR\Http\Controllers\BundleController@store' );
});

