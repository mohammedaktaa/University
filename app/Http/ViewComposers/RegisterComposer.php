<?php

namespace App\Http\ViewComposers;

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/31/2016
 * Time: 10:33 PM
 */
use Modules\General\Entities\Faculty;
use Modules\General\Entities\Semester;
use Modules\General\Entities\StudyYear;
use App\User;
use Illuminate\Contracts\View\View;
use LaravelLocalization;

class RegisterComposer
{
    public function compose(View $view)
    {
        $faculties=Faculty::all();
        $study_years=StudyYear::all();
        $semesters=Semester::all();
        $sem=Semester::with('course')->get();
        $users=User::all();
        $view->with(compact('users','faculties','study_years','semesters','sem'));
    }
}