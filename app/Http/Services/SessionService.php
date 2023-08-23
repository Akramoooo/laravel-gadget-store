<?php

namespace App\Http\Services;


class SessionService {

    public function startSession(object $user){
        session([
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ]);
    }
}