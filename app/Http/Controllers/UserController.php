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
        $message = ["Hello, welcome to my about page!", "I am a web developer with a passion for creating beautiful and functional websites.", "Feel free to explore and learn more about what I do!"];
        return view('about', ['name' => $name, 'message' => $message]);
    }
    function model_student_data()
    {
        $users = DB::select('select * from users');
        $students = \App\Models\StudentDetail::all();
        return view('displaydbdata', ['students' => $students], ['users' => $users]);
    }
}
