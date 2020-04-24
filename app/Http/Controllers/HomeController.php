<?php

namespace App\Http\Controllers;

use App\Fee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('ivy.welcome');
    }
    public function display()
    {
        $fees = Fee :: has('students')->get();
       return view ('ivy.feepayments')->with('fees', $fees);
    }
}
