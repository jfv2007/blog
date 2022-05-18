<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class PostObserver
{

    public function creating(Post $post)
    {
         if(!App::runningInConsole()){
            $post->user_id = auth()->user()->id;
         }
    }
    /*Va a eliminar la imagen antes de que se elimine el posts*/
    public function deleting(Post $post)
    {
        if($post->image){
            /* Storage::delete('posts/',$post->image->url); */
            Storage::delete($post->image->url);
        }
    }
}
