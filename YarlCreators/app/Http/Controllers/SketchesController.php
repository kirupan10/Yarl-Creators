<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SketchesController extends Controller
{
    public function index(){
        return view('sketches');
    }
}
