<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index(){
        $patients = User::find(Auth::user()->id)->patient ;
        return view('pages.patient.index', ['title' => 'Patient', 'patients' => $patients]);
    }

    public function show($id){
        $patient = Patient::find($id);
        $emgs = $patient->emgmeasurement;
        $angles = $patient->anglemeasurement;
        return view('pages.patient.show', ['title' => 'Detail', 'patient' => $patient, 'emgs' => $emgs, 'angles' => $angles]);
    }
}
