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
    function dashboard(){
        $user = Auth::user();
        $patient = patient::where('patientID', $user->isPatient)->first();
        return view('dashboard', [
            'patient' => $patient,
            ]
        );
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
    public function reset(){

        $user = Auth::user();
        $state = patient::where('patientID', $user->isPatient)->first();

        if ($state->app_state != 0) {
            $state->app_state = 0;
        } else{
            $state->app_state = 21;
        }
        
        $state->save();
        return redirect('/dashboard');
    }

    public function stap_verder(){
        $user = Auth::user();
        $state = patient::where('patientID', $user->isPatient)->first();

        if ($state->app_state < 21) {
            $state->app_state = $state->app_state + 1;
        } else {
            $state->app_state = 0;
        }
        
        

        $state->save();
        return redirect('/dashboard');
    }

    public function get_app_state(){
        $user = Auth::user();
        $state = patient::where('patientID', $user->isPatient)->first();
        
        return $state->app_state;
    }
}
