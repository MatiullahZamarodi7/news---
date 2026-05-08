<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        // if(auth()->user()->isAdmin('role') == 'admin'){
        //     return true
        // }
    }
}
