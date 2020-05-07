<?php

namespace App\Policies;

use App\User;
use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;
use phpDocumentor\Reflection\Types\Integer;

class ItemsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the item.
     *
     * @param  \App\User  $user
     * @param  \App\Item  $item
     * @return mixed
     */
    public function viewEdit(User $user,Item $item)
    {

        if (Auth::check())
        {
//            $items = Item::all()->where('user_id', $user->id)->toArray();

            return $user->id == $item->user_id;
        }
        else {
            return false;
        }
    }
//    public function view(User $user, Item $item)
//    {
//        //
//        return true;
//    }

    /**
     * Determine whether the user can create items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the item.
     *
     * @param  \App\User  $user
     * @param  \App\Item  $item
     * @return mixed
     */
    public function update(User $user)
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can delete the item.
     *
     * @param  \App\User  $user
     * @param  \App\Item  $item
     * @return mixed
     */
    public function delete(User $user)
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can restore the item.
     *
     * @param  \App\User  $user
     * @param  \App\Item  $item
     * @return mixed
     */
    public function restore(User $user, Item $item)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the item.
     *
     * @param  \App\User  $user
     * @param  \App\Item  $item
     * @return mixed
     */
    public function forceDelete(User $user, Item $item)
    {
        //
    }
}
