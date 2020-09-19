<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Publicacion;
use App\Autor;
use App\Editorial;
use App\Tema;
use App\Idioma;
use App\Estanteria;

class PublicacionController extends Controller
{
    public function index(Request $request)
    {
        $publicaciones=Publicacion::join('autores','autores.idautor','=','publicaciones.idautor')
        ->join('editoriales','editoriales.ideditorial','=','publicaciones.ideditorial')
        ->join('temas','temas.idtema','=','publicaciones.idtema')
        ->join('idiomas','idiomas.ididioma','=','publicaciones.ididioma')
        ->select('publicaciones.idpublicacion','publicaciones.publicacion','publicaciones.edicion','publicaciones.ISBNISSN','publicaciones.aniodepublicacion','publicaciones.tipo',
        'publicaciones.idautor','autores.autor as autor','publicaciones.ideditorial','editoriales.editorial as editorial',
        'publicaciones.idtema','temas.tema as tema','publicaciones.ididioma','idiomas.idioma as idioma')
        ->get();
        return view('publicacion.index',['publicaciones'=>$publicaciones]); 
    }
    public function create()
    {
        $autores=Autor::all();
        $editoriales=Editorial::all();
        $temas=Tema::all();
        $idiomas=Idioma::all();
        $estanterias=Estanteria::all();
        return view('publicacion.create',['autores'=>$autores,'editoriales'=>$editoriales,'temas'=>$temas,'idiomas'=>$idiomas,'estanterias'=>$estanterias]);
    }
    public function store(Request $request)
    {
        Publicacion::create($request->all());
        return redirect()->route('publicacion.index');
    }
    public function show($id)
    {
        $publicacion=Publicacion::join('autores','autores.idautor','=','publicaciones.idautor')
        ->join('editoriales','editoriales.ideditorial','=','publicaciones.ideditorial')
        ->join('temas','temas.idtema','=','publicaciones.idtema')
        ->join('idiomas','idiomas.ididioma','=','publicaciones.ididioma')
        ->select('publicaciones.idpublicacion','publicaciones.publicacion','publicaciones.edicion','publicaciones.ISBNISSN','publicaciones.aniodepublicacion','publicaciones.tipo',
        'publicaciones.idautor','autores.autor as autor','publicaciones.ideditorial','editoriales.editorial as editorial',
        'publicaciones.idtema','temas.tema as tema','publicaciones.ididioma','idiomas.idioma as idioma')
        ->find($id);
        return  view('publicacion.show',['publicacion'=>$publicacion]);
    }
    public function edit($id)
    {
        $publicacion=Publicacion::find($id);
        $autores=Autor::all();
        $editoriales=Editorial::all();
        $temas=Tema::all();
        $idiomas=Idioma::all();
        $estanterias=Estanteria::all();
        return view('publicacion.edit',['publicacion'=>$publicacion,'autores'=>$autores,'editoriales'=>$editoriales,'temas'=>$temas,'idiomas'=>$idiomas,'estanterias'=>$estanterias]);
    }
    public function update(Request $request, $id)
    {
        Publicacion::find($id)->update($request->all());
        return redirect()->route('publicacion.index');
    }
    public function destroy($id)
    {
        Publicacion::find($id)->delete();
        return redirect()->route('publicacion.index');
    }
}
