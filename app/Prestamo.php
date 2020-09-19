<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table="prestamos";
    protected $primaryKey="idprestamo";
    protected $fillable = ['fechadeprestamo','fechadedevolucion','idprestamista','idpublicacion'];
	public $timestamps=false;
}
