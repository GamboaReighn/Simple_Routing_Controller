<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = 'This is the Skills page.';
        return view('skills', compact('data'));
    }
}
