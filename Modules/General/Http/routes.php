<?php

Route::group(['middleware' => 'web', 'prefix' => 'general', 'namespace' => 'Modules\General\Http\Controllers'], function()
{
    Route::get('/', 'GeneralController@index');
});
