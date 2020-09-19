<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table="editoriales";
    protected $primaryKey="ideditorial";
    protected $fillable = ['editorial','telefono','email','direccion'];
	public $timestamps=false;
}
