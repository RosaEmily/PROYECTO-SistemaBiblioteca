<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table="temas";
    protected $primaryKey="idtema";
    protected $fillable = ['tema'];
	public $timestamps=false;
}
