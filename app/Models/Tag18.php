<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag18 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     /* protected $fillable=['id','tag','descripcion','operacion','ubicacion','id_cen', 'id_planta','id_seccion', 'id_categoria', 'id_status', 'foto']; */


    /* protected $table = "Tag18s";
 */    public $timestamps = false;

/*  public function centros()
    {
        return $this->belongsTo(Tcentro::class);
    } */

    public function tag18Centro(){
        return $this->belongsTo(Centro::class, 'id_cen');
        /* un tag pertenece a un CT ---especificar el id */
    }

    public function tag18Plantas(){
        return $this->belongsTo(Planta::class, 'id_planta');
        /* un tag pertenece a un CT ---especificar el id */
    }

    public function tag18seccion(){
        return $this->belongsTo(Seccion::class, 'id_seccion');
        /* un tag  pertenece a un Seccion ---especificar el id */
    }

    public function tag18categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
        /* un tag pertenece a un Categoria ---especificar el id */
    }

    public function tag18stags(){
        return $this->belongsTo(Stag::class, 'id_status');
        /* un Tag pertenece a un Status ---especificar el id */
    }
 /* para mostrar los elementos de la tabla tag18s */
}
