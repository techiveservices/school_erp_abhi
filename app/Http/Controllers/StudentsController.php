<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateStudent;
use App\User;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

use Auth;
use Session;
use Validator;
class StudentsController extends Controller
{
    public function view(){

    	$students = DB::table('insert_schools')->select('id','schl_name')->get();

    	return view('backend.viewStudent')->with('students', $students);

    }

   public function create(Request $request){

    	$studentData = new CreateStudent;

    	$studentDetails = new User;

    	$studentData->school_id = $request->input('sc_id'); 

    	$studentData->name = $request->input('st_name');

    	$studentDetails->name = $request->input('st_name');

    	$studentData->class = $request->input('class_id');

    	$studentData->section = $request->input('class_sec');

    	$studentData->email = $request->input('st_email');

    	$studentDetails->email = $request->input('st_email');

    	$studentData->gender = $request->input('st_gender');

    	$studentData->pwd = Hash::make($request->input('st_pass'));

    	$studentDetails->password = Hash::make($request->input('st_pass'));

    	$studentData->father_name = $request->input('st_father_name');

    	$studentData->f_office_add = $request->input('f_office_add');

    	$studentData->f_mobile_no = $request->input('f_mob_no');

    	$studentData->mother_name = $request->input('st_mother_name');

    	$studentData->m_office_add = $request->input('m_office_add');

    	$studentData->m_mobile_no = $request->input('m_mob_no');

    	$studentData->address = $request->input('sc_add');

    	$studentData->mob_no1 = $request->input('st_mobile1');

    	$studentData->mob_no2 = $request->input('st_mobile2');

    	$studentData->dob = $request->input('st_dob');

    	$studentData->parent_email = $request->input('parents_email');

    	$studentDetails->login_type = '0';

    	$studentDetails->status = '0';

    	$this->validate($request, [
	      'st_logo'  => 'required|image'
	     ]);

	     $image = $request->file('st_logo');

	     $new_name = rand() . '.' . $image->getClientOriginalExtension();

	     $image->move(public_path('images'), $new_name);

	     $studentData->st_image = $new_name;

    	$studentData->save();

    	$studentDetails->save();

    	return back()->with('success', 'Student add Successfully')->with('path', $new_name);

    }
}
