<?php

namespace App\Policies;

use App\Models\Refugio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RefugioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Refugio  $refugio
     * @return mixed
     */
    public function view(User $user, Refugio $refugio)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->tipo == 'Administrador_refugio';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Refugio  $refugio
     * @return mixed
     */
    public function update(User $user, Refugio $refugio)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Refugio  $refugio
     * @return mixed
     */
    public function delete(User $user, Refugio $refugio)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Refugio  $refugio
     * @return mixed
     */
    public function restore(User $user, Refugio $refugio)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Refugio  $refugio
     * @return mixed
     */
    public function forceDelete(User $user, Refugio $refugio)
    {
        //
    }
}
