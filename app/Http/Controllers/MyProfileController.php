<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    public function index(){
        $personaldata = Auth::user()->personaldata;
        // dd(User::find(1));
        return view('pages.myprofile', ['title' => 'MyProfile', 'personaldata' => $personaldata]);
    }

    public function update(Request $request){

    }
}
