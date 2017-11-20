<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;
use Modules\General\Entities\Semester;


class StudentController extends Controller
{
    public function access(Request $request)
    {

        $field = filter_var($request->get('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'university_id';
        $request->merge([$field => $request->get('email')]);
        $user = User::where($field, $request->get('email'))->first();
        if($user && $user->user_type_id==1){
        return \Response::json(['state'=>'successfully','user'=>$user,'type'=>'teacher']);
        }else if($user && $user->user_type_id==2){
        return \Response::json(['state'=>'successfully','user'=>$user,'type'=>'student']);
        }else{
            return \Response::json(['state'=>'failed']);
        }
//        return \Response::json(['request'=>$request->input()]);
    }

    public function table($table,$hasExtra=false)
    {
        $tableName=$table.'-table';
        return view('admin::table',compact('tableName','title','hasExtra','table'));
    }

    public function events($id)
    {
        $events=json_encode(Semester::where('semesters.semester_id',$id)->select(['courses.name_'.$this->lang.' as title','courses.created_at as start'])
            ->join('courses','semesters.semester_id','=','courses.semester_id')
            ->get());
        return $events;
    }
    public function select()
    {
        $events=json_encode(Semester::where('semesters.semester_id','>=',0)->select(['courses.name_'.$this->lang.' as text','courses.course_id as id'])
            ->join('courses','semesters.semester_id','=','courses.semester_id')
            ->get());
        return $events;
    }
    public function select2()
    {
        $events=json_encode(Semester::where('semesters.semester_id','>=',0)->select(['courses.name_'.$this->lang.' as text','courses.course_id as id'])
            ->join('courses','semesters.semester_id','=','courses.semester_id')
            ->get());
        return $events;
    }
}
