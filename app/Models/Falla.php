<?php

namespace App\Models;

use App\Models\Admin\Trabajo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falla extends Model
{
    use HasFactory;

     protected $guarded = ['id'];
     public $timestamps = false;

     public function users()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

      public function tagfallas(){
        return $this->belongsTo(Tag18::class, 'id_tag18s');
        /* una falla pertenece a un Tag ---especificar el id */
    }

    public function fallaUser(){
        return $this->belongsTo(User::class, 'id_usuario');
        /* una falla pertenece a un usuario ---especificar el id */
    }


    public function fllastatus(){
        return $this->belongsTo(Sfalla::class, 'id_sfallas');
        /* una falla pertenece a un status ---especificar el id */
    }
    //////////////

     public function fallatrabajos(){
        return $this->hasMany(Trabajo::class, 'id');
        /* un status  tiene muchas tags */
     }
}
