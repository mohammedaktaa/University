<?php

namespace Modules\Student\Http\Controllers;


use Alert;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\General\Entities\Faculty;
use Modules\General\Entities\FacultyUniversity;
use Modules\General\Entities\RegisterFaculty;
use Modules\General\Entities\Registration;
use Modules\General\Entities\Subject;
use Modules\Student\Http\Requests\RegisterRequest;
use Session;
use UxWeb\SweetAlert\SweetAlert;


/**
 * Class StudentController
 * @package Modules\Student\Http\Controllers
 */
class StudentController extends Controller
{

    public function register()
    {
        $faculty=[];
        $data = FacultyUniversity::select(['faculties.name_'.$this->lang.' as f_name_en','universities.name_'.$this->lang.' as u_name_en','faculty_universities.total_required'])
            ->leftJoin('faculties','faculties.faculty_id','=','faculty_universities.faculty_id')
            ->leftJoin('universities','universities.university_id','=','faculty_universities.university_id')
            ->where('faculty_universities.id','>=',1)
            ->get();
        $subjects = Subject::all();
        foreach ($data as $item)
            $faculty[]=$item['f_name_en'].'-'.$item['u_name_en'].'     '.$item['total_required'];
//        Alert::error(trans('student::register.failed'));
        return view('student::register', compact('subjects','faculty'))/*->with('errors','dsadsa')*/;
    }


    public function getSubject()
    {
        $subject = Subject::all();
        return ['success' => true, 'data' => $subject];
    }


    public function save(RegisterRequest $request)
    {
        $available=[];
        if ($request->total_baccalurate == array_sum($request->except(['username','total_baccalurate']))){
        $register = new Registration;
        $register->username           = $request->username;
        $register->total_baccalurate  = $request->total_baccalurate;
        $register->math               = $request->math;
        $register->arabic             = $request->arabic;
        $register->physics            = $request->physics;
        $register->french             = $request->french;
        $register->english            = $request->english;
        $register->chemics            = $request->chemics;
        $register->science            = $request->science;
        $register->national_education = $request->national_education;
        $faculties                    = $request->faculty;
            foreach ($faculties as $item) {
                $faculty=FacultyUniversity::whereFacultyId($item)->first();
                if ($register->total_baccalurate >= $faculty->total_required)
                    $available[]=['name'=>$faculty->faculty['name_'.$this->lang],'id'=>$faculty->id];
//                        else
//                            return ['success'=>true,'msg'=>/*trans('student::register.success')*/ 'There are not any faculty available for your total','type'=>'danger'];
            }
            $register->save();
            $register->faculty()->attach($available[0]['id']);
            return['success'=>true,'msg'=>/*trans('student::register.success')*/ 'Your Faculty is '.$available[0]['name'],'type'=>'success'];
        }else{
             Alert::error(trans('student::register.failed'));
            return['success'=>true,'msg'=>trans('student::register.failed'),'type'=>'danger'];
        }
    }
}
