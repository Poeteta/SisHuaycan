<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
   protected $table='sesiones';
   protected $primaryKey='idSesiones';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Tipo_Sesiones_idTipo_Sesiones',
      'Nom_sesion',
      
   ];

   protected $guarded =[


   ];
}