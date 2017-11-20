<?php

Route::group(['middleware' => ['web', 'localizationRedirect', 'auth', 'auth.admin'], 'prefix' => LaravelLocalization::setLocale() . '/' . 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function () {

    Route::get('table/{table}/{hasExtras?}', 'AdminController@table')->name('admin-table');
    Route::get('/courses/show', 'AdminController@courses');
    // Auto compeltes
    Route::get('category-autocomplete', 'AutocompleteController@categoryAutocomplete')->name('category-autocomplete');
    Route::get('course-autocomplete', 'AutocompleteController@courseAutocomplete');
    Route::get('faculty-autocomplete', 'AutocompleteController@facultyAutocomplete');
    Route::get('faculty1-autocomplete', 'AutocompleteController@faculty1Autocomplete');
    Route::get('university-autocomplete', 'AutocompleteController@universityAutocomplete');
    Route::get('state-autocomplete', 'AutocompleteController@stateAutocomplete');
    Route::get('semester-autocomplete', 'AutocompleteController@semesterAutocomplete');
    Route::get('city-autocomplete', 'AutocompleteController@cityAutocomplete');
    Route::get('country-autocomplete', 'AutocompleteController@countryAutocomplete');
    Route::get('user-autocomplete', 'AutocompleteController@userAutocomplete');
    Route::get('gender-autocomplete', 'AutocompleteController@genderAutocomplete');
    Route::get('menu-item-autocomplete', 'AutocompleteController@menuItemAutocomplet');
    Route::get('study-year-autocomplete', 'AutocompleteController@studyyearAutocomplete');
    Route::get('user-type-autocomplete', 'AutocompleteController@usertypeAutocomplete');
    Route::get('differenation-autocomplete', 'AutocompleteController@differenationAutocomplete');
    //-------------------------------------
    Route::get('/', 'AdminController@index')->name('admin-home');
    Route::post('upload-image', 'AdminController@uploadImage');
    Route::post('upload-doc/{id?}', 'AdminController@uploadDocument');
    Route::get('files', 'PatientController@getFiles');
    Route::post('delete-file/{file}', 'PatientController@deleteFile');
//----------------------------------------------
    Route::get('get-faculties','AdminController@getFaculties');
    Route::get('get-stuYear','AdminController@getStuYear');
    Route::get('get-graduations','AdminController@getGraduations');
    Route::get('send', function () {
        $user = Auth::user();
        Notification::send($user, new \App\Notifications\MailNotification());
//        Nexmo::message()->send([
//            'to' => '963930295680',
//            'from' => 'Mohammed',
//            'text' => 'Using the facade to send a message.'
//        ]);
    });
    Route::get('/sms/send', function (\Nexmo\Client $nexmo) {
        $message = $nexmo->message()->send([
            'to' => '963932685722',
            'from' => '@leggetter',
            'text' => 'Sending SMS from Laravel. Woohoo!'
        ]);
        Log::info('sent message: ' . $message['message-id']);
    });
});
