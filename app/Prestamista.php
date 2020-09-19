<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamista extends Model
{
    protected $table="prestamistas";
    protected $primaryKey="idprestamista";
    protected $fillable = ['DNI','nombres','apellidos','telefono','direccion'];
	public $timestamps=false;
}
