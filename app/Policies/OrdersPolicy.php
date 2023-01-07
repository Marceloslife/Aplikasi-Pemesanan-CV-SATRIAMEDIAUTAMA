<?php

namespace App\Policies;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrdersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return $user->level == 1 or $user->level == 2 or $user->level == 0 ;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->level == 0;
    }

    public function statusorder(User $user){
        return $user->level == 1 or $user->level == 2 or $user->level == 0 ;
    }

    public function adminview(User $user){
        return $user->level == 1 or $user->level == 2;
    }
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Orders $orders)
    {
        //
        return $user->level == 1 or $user->level == 2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Orders $orders)
    {
        //
    }
}