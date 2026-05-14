<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        return view('home');
    }
    function about()
    {
        $name = "Kritishma Pradhan";
        $message = ["Create Operation", "Read Operation", "Update Operation", "Delete Operation"];
        return view('about', ['name' => $name, 'message' => $message]);
    }
    function contact()
    {
        return view('contact');
    }
    function model_student_data()
    {
        $users = DB::select('select * from users');
        $students = \App\Models\StudentDetail::all();
        return view('displaydbdata', ['students' => $students], ['users' => $users]);
    }
}
