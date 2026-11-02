<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    $data = [
        "name" => "mounir",
        "formation" => "devlopment web",
        "school" =>"solicode",
    ];
     return view("student" ,$data);

    }
}
