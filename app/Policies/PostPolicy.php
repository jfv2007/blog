<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
/* para que nadien pueda acceder a los posts en el explorador*/
   public function author(User $user, Post $post){
       if($user->id == $post->user_id){
           return true;
       }else{
           return false;
       }
   }
/*para colocar los posts que solo esten publicados*/
   public function published(?User $user, Post $post){
       if($post->status == 2){
           return true;
       }else{
            return false;
       }
   }
}
