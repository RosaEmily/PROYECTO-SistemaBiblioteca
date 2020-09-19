<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table="idiomas";
    protected $primaryKey="ididioma";
    protected $fillable = ['idioma'];
	public $timestamps=false;
}
