<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table="publicaciones";
    protected $primaryKey="idpublicacion";
    protected $fillable = ['publicacion','edicion','ISBNISSN','aniodepublicacion','tipo','idautor','ideditorial','idtema','ididioma'];
	public $timestamps=false;
}
