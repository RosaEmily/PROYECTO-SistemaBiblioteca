<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table="generos";
    protected $primaryKey="idgenero";
    protected $fillable = ['genero'];
	public $timestamps=false;
}
