<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function index()
    {
        return view('admin.dummy');
    }
}
