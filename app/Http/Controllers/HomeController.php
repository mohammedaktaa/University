<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Modules\General\Entities\MenuItem;
use Modules\General\Entities\Semester;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $this->validate($request,[
         'name_en'=>'required',
         'name_ar'=>'required'
     ]);
        $seme=Semester::create($request->all());
        return response()->json($seme);
    }

    public function headerUpdate()
    {
        $menuItems = MenuItem::orderBy('order')->with(['parent','children'])->orderBy('is_root')->orderBy('order')->get();

        return view('admin::layouts.aside',['menuItems'=>$menuItems]);
    }
}
