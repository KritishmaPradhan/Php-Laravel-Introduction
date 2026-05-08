<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
