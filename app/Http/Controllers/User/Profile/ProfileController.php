<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return true;
    }

    public function logOut(){
        session()->flush();
        return redirect()->route('main');
    }
}
