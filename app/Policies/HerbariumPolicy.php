<?php

/*
 * This file is part of the OpenDataBio app.
 * (c) OpenDataBio development team https://github.com/opendatabio
 */

namespace App\Policies;

use App\User;
use App\Herbarium;
use Illuminate\Auth\Access\HandlesAuthorization;

class HerbariumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the herbarium.
     *
     * @param \App\User      $user
     * @param \App\Herbarium $herbarium
     *
     * @return mixed
     */
    public function view(User $user, Herbarium $herbarium)
    {
        // everyone can view herbaria
        return true;
    }

    /**
     * Determine whether the user can create herbaria.
     *
     * @param \App\User $user
     *
     * @return mixed
     */
    public function create(User $user)
    {
        return User::ADMIN == $user->access_level;
    }

    /**
     * Determine whether the user can update the herbarium.
     *
     * @param \App\User      $user
     * @param \App\Herbarium $herbarium
     *
     * @return mixed
     */
    public function update(User $user, Herbarium $herbarium)
    {
        // Currently impossible!
        return false;
    }

    /**
     * Determine whether the user can delete the herbarium.
     *
     * @param \App\User      $user
     * @param \App\Herbarium $herbarium
     *
     * @return mixed
     */
    public function delete(User $user, Herbarium $herbarium)
    {
        return User::ADMIN == $user->access_level;
    }
}
