<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaintingFramesController extends Controller
{
    public function index(){
        return view('PaintingFrames');
    }

}
