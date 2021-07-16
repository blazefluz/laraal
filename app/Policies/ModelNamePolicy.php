<?php

namespace App\Policies;

use App\User;
use App\Tickets;
use Illuminate\Auth\Access\HandlesAuthorization;

class ModelNamePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any tickets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tickets.
     *
     * @param  \App\User  $user
     * @param  \App\Tickets  $tickets
     * @return mixed
     */
    public function view(User $user, Tickets $tickets)
    {
        
    }

    /**
     * Determine whether the user can create tickets.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tickets.
     *
     * @param  \App\User  $user
     * @param  \App\Tickets  $tickets
     * @return mixed
     */
    public function update(User $user, Tickets $tickets)
    {
        //
    }

    /**
     * Determine whether the user can delete the tickets.
     *
     * @param  \App\User  $user
     * @param  \App\Tickets  $tickets
     * @return mixed
     */
    public function delete(User $user, Tickets $tickets)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the tickets.
     *
     * @param  \App\User  $user
     * @param  \App\Tickets  $tickets
     * @return mixed
     */
    public function restore(User $user, Tickets $tickets)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tickets.
     *
     * @param  \App\User  $user
     * @param  \App\Tickets  $tickets
     * @return mixed
     */
    public function forceDelete(User $user, Tickets $tickets)
    {
        //
    }
}
