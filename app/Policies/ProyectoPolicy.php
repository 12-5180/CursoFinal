<?php

namespace App\Policies;

use App\User;
use App\Propuesta;
use Illuminate\Auth\Access\HandlesAuthorization;


class ProyectoPolicy
{
    use HandlesAuthorization;

    public function owner(User $user, Propuesta $propuesta){
        return $user->id === $propuesta->user_id;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
       
    }
}
