<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class LoginUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        $credentials = [
            'email' => $args['email'],
            'password' => $args['password'],
        ];

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $args['email'])->first();
            $token = $user->createToken('authToken')->plainTextToken;

            return [
                'user' => $user,
                'token' => $token,
            ];
        }

        throw new \Exception('Invalid credentials');
    }
}
