<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back();
    }
}
