<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\medicijn;
use App\Models\inname;
use App\Models\user;
use Auth;

class AppController extends Controller
{
    function index(){
        $patient = patient::first();
        return view('index')->with('patient', $patient);
    }

    public function showMeds(){
        $user = Auth::user();
        $medicijnen = medicijn::all();
        $inname = inname::all();

        return view('medicijninfo', [
            'medicijnen' => $medicijnen,
            'inname' => $inname,
            'user' => $user,
        ]);
    }
}
