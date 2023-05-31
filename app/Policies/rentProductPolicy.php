<?php

namespace App\Policies;

use App\Models\rentProduct;
use App\Models\User;

class rentProductPolicy
{
    /**
     * Create a new policy instance.
     */
   public function edit(User $user, rentProduct $rentProduct)
   {
    return $user->id === $rentProduct->user_id;
   }
   public function update(User $user, rentProduct $rentProduct)
   {
    return $user->id === $rentProduct->user_id;
   }
   public function delete(User $user, rentProduct $rentProduct)
   {
    return $user->id === $rentProduct->user_id;
   }
}
