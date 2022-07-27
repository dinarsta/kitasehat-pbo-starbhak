<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilanController extends Controller
{
    public function index(){
        return view('layout.main');
    }
}