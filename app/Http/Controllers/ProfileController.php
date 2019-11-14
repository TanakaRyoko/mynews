<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request){
        
        $profiles =profile::find($request->id);
        return view('profile.index', ['profiles' => $profiles]);
    }
}



