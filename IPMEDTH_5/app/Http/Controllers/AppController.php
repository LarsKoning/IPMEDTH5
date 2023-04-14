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
        $patient = patient::where('patientID', 1)->first();
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
        $state = patient::where('patientID', 1)->first();
        $state->controller = "1";
        // if ($state->app_state != 0) {
           
        // } else{
        //     $state->app_state = 20;
        // }
        
        $state->save();
        return redirect('/dashboard');
    }
    public function stap_verder(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();
        $state->controller = "2";

        if ($state->app_state < 20) {
            $state->app_state = $state->app_state + 1;
        } else {
            $state->app_state = 0;
        }
        
        

        $state->save();
        return redirect('/dashboard');

    }

    public function get_app_state(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();
        
        return $state->app_state;
    }

    public function get_controller_state(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();

        return $state->controller;
    }

    public function controller_reset(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();

        $state->controller = 0;
        $state->app_state = 0;

        $state->save();
        return $state->controller;
    }

    public function controller_reset_2(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();

        $state->controller = 0;

        $state->save();
        return $state->controller;
    }

    public function stap_count(){
        $user = Auth::user();
        $state = patient::where('patientID', 1)->first();

        $state->app_state = $state->app_state + 1;
        $state->save();
        return $state->app_state;
    }
}

