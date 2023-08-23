<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Services\SessionService;

class LogController extends Controller
{
    protected $sessionService;

    public function __construct(SessionService $sessionService)
    {
        $this->sessionService = $sessionService;
    }

    public function logForm()
    {
        return view('auth.logForm');
    }

    public function loginer(LoginRequest $request)
    {
        $data = $request->validated();
        if(Auth::attempt($data)){
            $user = DB::table('users')->where('email', $data['email'])->get()->first();
            $this->sessionService->startSession($user);
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Wrong email or password',
        ]);

    }
}
