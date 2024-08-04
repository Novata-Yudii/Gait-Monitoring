<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MyProfileController extends Controller
{
    public function index(){
        $personaldata = Auth::user()->personaldata;
        return view('pages.myprofile', ['title' => 'MyProfile', 'personaldata' => $personaldata]);
    }

    public function update(Request $request){
        PersonalData::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'fullname' => $request->fullname,
                'company' => $request->company,
                'spesialis' => $request->spesialis,
                'country' => $request->country,
                'addres' => $request->addres,
                'phone' => $request->phone
            ]
        );
        if ($request->has('photo_profile')) {
            if(Auth::user()->photo_profile){
                File::delete(public_path('photo_profile'). '/' .Auth::user()->photo_profile);
                $photo_file = $request->file('photo_profile');
                $ekstension_file = $photo_file->extension();
                $photo_profile = date('ymdhis').'.'.$ekstension_file;
                $photo_file->move(public_path('photo_profile'), $photo_profile);
            }else{
                $photo_file = $request->file('photo_profile');
                $ekstension_file = $photo_file->extension();
                $photo_profile = date('ymdhis').'.'.$ekstension_file;
                $photo_file->move(public_path('photo_profile'), $photo_profile);
            }
            User::where('id', Auth::user()->id)
                ->update([
                    'email' => $request->email,
                    'photo_profile' => $photo_profile
                ]);
            return redirect('/myprofile');
        }
        User::where('id', Auth::user()->id)
            ->update([
                'email' => $request->email
            ]);
        return redirect('/myprofile');

    }
}
