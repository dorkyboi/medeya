<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

abstract class AbstractPolicy
{
    use HandlesAuthorization;

    const ENTITY = '';

    /**
     * Determine whether the user can view any categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('list ' . static::ENTITY);
    }

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->can('read ' . static::ENTITY);
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create ' . static::ENTITY);
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->can('update ' . static::ENTITY);
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->can('delete ' . static::ENTITY);
    }
}
