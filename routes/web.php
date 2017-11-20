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
    Route::get('select','StudentController@select');
    Route::get('auto','StudentController@select2');
    Route::get('auto1','StudentController@select2');
    Route::get('test',
        function (){
        return view('test');
        });
    Route::get('vue',function (){
        return view('test-vue');
    });
    Route::get('calendar',function (){
        $sem=Semester::with('course')->get();
//        foreach($sem as $semester){
//            foreach($semester->course as $seme){
//                        dd($seme->name_en);
//        }
//                }
        return view('calendar');
    });
    Auth::routes();
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::post('login', '\App\Http\Controllers\Auth\LoginController@login')->name('custom-login');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('registration','TeacherController@register');
    Route::get('pass',function (){
        return bcrypt('123456');
    } );

});
