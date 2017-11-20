<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(Request $request)
    {
        return \Response::json(['status'=>'successfully','request'=>$request->input(),'email'=>'fasfasda']);
   }
}
