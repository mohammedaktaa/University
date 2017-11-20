<?php

Route::group(['middleware' => 'web', 'prefix' => 'employee', 'namespace' => 'Modules\Employee\Http\Controllers'], function()
{
    Route::get('/', 'EmployeeController@index');
});
