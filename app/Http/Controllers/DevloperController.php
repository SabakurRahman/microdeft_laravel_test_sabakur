<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Developer;

class DevloperController extends Controller
{
    //
    public function index(){
        return view('devloper');
    }

    public function create(Request $request){
          //dd($request->all());

          $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'designation'=>'required'
           
 
         ]);
 
       
       $devloper = new Developer;
       $devloper->name=$request->name;
       $devloper->phone=$request->phone;
       $devloper->email=$request->email;
       $devloper->designation=$request->designation;
      
       $devloper->save();
        return redirect()->back()->with('success', 'Devloper Created  successfully');

    }
    public function getList(){


        $devloper=Developer::get();

        //dd($devloper);
 
         return view('devloperlist',compact('devloper'));

    }
}
