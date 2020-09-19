<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table="autores";
    protected $primaryKey="idautor";
    protected $fillable = ['autor','email','nacionalidad'];
	public $timestamps=false;
}
