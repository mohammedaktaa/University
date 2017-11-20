<?php

Route::group(['middleware' => ['web','localizationRedirect'], 'prefix' => LaravelLocalization::setLocale() .'/student', 'namespace' => 'Modules\Student\Http\Controllers'], function()
{
    Route::get('/', 'StudentController@index');
    Route::get('register','StudentController@register')->middleware('sweetalert');
    Route::get('subjects','StudentController@getSubject');
    Route::post('register','StudentController@save');
});
