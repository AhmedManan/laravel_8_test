<?php

namespace App\Http\Controllers;
use App\Models\ajax;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view("insertajax");
    }

    public function store(Request $req)
    {
        
        $ajax= new ajax;
        $ajax->name=$req->get('name');
        $ajax->email=$req->get('email');
        $ajax->course=$req->get('course');
        $ajax->save();
        return response()->json([

            'status'=>230,
            'message'=>'Student added succesfully',

        ]);
    }

    public function fetchstudent(){
        $ajax= ajax::all();
        return response()->json([
            'ajax'=>$ajax,
        ]);
        
    }

}
