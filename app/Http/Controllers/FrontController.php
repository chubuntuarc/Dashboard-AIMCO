<?php

namespace Dashboard\Http\Controllers;

use Illuminate\Http\Request;

use Dashboard\Http\Requests;
use Dashboard\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
      return view('contacto');
    }
}
