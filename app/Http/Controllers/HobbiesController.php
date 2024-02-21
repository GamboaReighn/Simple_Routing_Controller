<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = 'This is the Hobbies page.';
        return view('hobbies', compact('data'));
    }
}
