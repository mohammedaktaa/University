<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\General\Entities\Semester;
Route::group(['prefix'=>LaravelLocalization::setLocale()],function (){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
    Route::get('events/{id}','StudentController@events');
    Auth::routes();
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::post('login', '\App\Http\Controllers\Auth\LoginController@login')->name('custom-login');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('registration','TeacherController@register');
    Route::get('pass',function (){
        return bcrypt('123456');
    } );
    Route::post('test-vue','HomeController@index');
    Route::get('header-update','HomeController@headerUpdate');

});
