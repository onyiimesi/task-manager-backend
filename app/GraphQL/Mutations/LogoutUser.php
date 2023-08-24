<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

final class LogoutUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        if (Auth::user()) {
            Auth::user()->tokens->each(function ($token, $key) {
                $token->delete();
            });

            return true;
        }

        return false;
    }
}
