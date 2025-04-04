<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function  profile(Request $request)
    {
        return view('profile');
    }

    public function store(Request $request)
    {
        Profile::create(
            $request->only([
            'user_id',
            'gender',
            'birthday',
        ])
            );
        return view('index');
    
    }
}