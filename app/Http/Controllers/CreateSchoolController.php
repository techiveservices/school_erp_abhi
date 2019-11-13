<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\insertSchool;
use DB;
use App\Http\Requests;

use Auth;
use Session;
use Validator;
class CreateSchoolController extends Controller
{
   
    public function index(){

        $users = DB::table('insert_schools')->select('*')->orderByDesc  ('id')->get();

        return view('backend.viewSchool')->with('users', $users);
      

    }
     function upload(Request $request)
    {
     

     $school = new insertSchool;

     $school->schl_name = $request->input('sc_name');

     $school->ph_no = $request->input('sc_phno');

     $school->principle_name = $request->input('sc_p_name');

     $school->website = $request->input('sc_website');

     $school->schl_add = $request->input('sc_add');

     $school->class = $request->input('class_array');

     $this->validate($request, [
      'sc_logo'  => 'required|image|mimes:jpg,png,jpeg|max:2048'
     ]);

     $image = $request->file('sc_logo');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);

     $school->schl_logo = $new_name;

     $school->save();

     return back()->with('success', 'School add Successfully')->with('path', $new_name);

    }

}
