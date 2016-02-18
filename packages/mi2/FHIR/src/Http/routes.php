<?php

Route::group(['prefix' => 'fhir'], function () {

    // See resource routes in Laravel Docs
    Route::resource('patient', '\Mi2\FHIR\Http\Controllers\PatientController');

});

