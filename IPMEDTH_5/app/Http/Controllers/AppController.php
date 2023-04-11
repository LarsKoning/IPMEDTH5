<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\medicijn;
use App\Models\inname;
use App\Models\user;

class AppController extends Controller
{
    function index(){
        $patient = patient::first();
        return view('index')->with('patient', $patient);
    }

    public function reset(){
        
    }
}
