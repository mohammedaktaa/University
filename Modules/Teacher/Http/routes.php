<?php

Route::group(['middleware' => 'web', 'prefix' => 'teacher', 'namespace' => 'Modules\Teacher\Http\Controllers'], function()
{
    Route::get('/', 'TeacherController@index');
});
