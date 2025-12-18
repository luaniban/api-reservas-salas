<?php

namespace App\Policies;

use App\Models\User;

class ResourcePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user): bool
    {
        return $user->role_id === 1;
    }

    public function update(User $user): bool
    {
        return $user->role_id === 1;
    }



    public function delete(User $user): bool
    {
        return $user->role_id === 1;
    }
}
