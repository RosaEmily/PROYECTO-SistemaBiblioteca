<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estanteria extends Model
{
    protected $table="estanterias";
    protected $primaryKey="idestanteria";
    protected $fillable = ['estanteria','ubicacion'];
	public $timestamps=false;
}
