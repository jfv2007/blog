<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     public $timestamps = false; 

    public function fallatrabajos(){
        return $this->belongsTo(Falla::class, 'id_falla');
        /* un Tag pertenece a un Status ---especificar el id */
    }

    public function trabajosUser(){
        return $this->belongsTo(User::class, 'id_user');
        /* un Tag pertenece a un Status ---especificar el id */
    }

    public function statustraba(){
        return $this->belongsTo(Strabajo::class, 'id_strabajos');
        /* un Tag pertenece a un Status ---especificar el id */
    }

}
