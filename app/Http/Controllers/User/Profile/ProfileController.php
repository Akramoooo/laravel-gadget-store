<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = User::find(auth()->id());
        return view('profile.index', compact('user'));
    }

    public function logOut(){
        session()->flush();
        return redirect()->route('main');
    }
}
