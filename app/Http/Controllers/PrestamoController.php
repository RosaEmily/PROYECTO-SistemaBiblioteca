<?php

namespace App\Http\Controllers;

use App\Prestamista;
use App\Prestamo;
use App\Publicacion;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index(Request $request)
    {
        $prestamos=Prestamo::join('prestamistas','prestamistas.idprestamista','=','prestamos.idprestamista')
        ->join('publicaciones','publicaciones.idpublicacion','=','prestamos.idpublicacion')
        ->select('prestamos.idprestamo','prestamos.fechadeprestamo','prestamos.fechadedevolucion',
        'prestamos.idprestamista',Prestamo::raw('concat(prestamistas.nombres," ",prestamistas.apellidos) as prestamista'),
        'prestamos.idpublicacion','publicaciones.publicacion as publicacion')
        ->get();
        return view('prestamo.index',['prestamos'=>$prestamos]); 
    }
    public function create()
    {
        $prestamistas=Prestamista::all();
        $publicaciones=Publicacion::all();
        return view('prestamo.create',['prestamistas'=>$prestamistas,'publicaciones'=>$publicaciones]);
    }
    public function store(Request $request)
    {
        Prestamo::create($request->all());
        return redirect()->route('prestamo.index');
    }
    public function show($id)
    {
        $prestamo=Prestamo::join('prestamistas','prestamistas.idprestamista','=','prestamos.idprestamo')
        ->join('publicaciones','publicaciones.idpublicacion','=','prestamos.idpublicacion')
        ->select('prestamos.idprestamo','prestamos.fechadeprestamo','prestamos.fechadedevolucion',
        'prestamos.idprestamista',Prestamo::raw('concat(prestamistas.nombres," ",prestamistas.apellidos) as prestamista'),
        'prestamos.idpublicacion','publicaciones.publicacion as publicacion')
        ->find($id);
        return  view('prestamo.show',['prestamo'=>$prestamo]);
    }
    public function edit($id)
    {
        $prestamo=Prestamo::join('prestamistas','prestamistas.idprestamista','=','prestamos.idprestamo')
        ->join('publicaciones','publicaciones.idpublicacion','=','prestamos.idpublicacion')
        ->select('prestamos.idprestamo','prestamos.fechadeprestamo','prestamos.fechadedevolucion',
        'prestamos.idprestamista',Prestamo::raw('concat(prestamistas.nombres," ",prestamistas.apellidos) as prestamista'),
        'prestamos.idpublicacion','publicaciones.publicacion as publicacion')
        ->find($id);
        $prestamistas=Prestamista::all();
        $publicaciones=Publicacion::all();
        return view('prestamo.edit',['prestamo'=>$prestamo,'prestamistas'=>$prestamistas,'publicaciones'=>$publicaciones]);
    }
    public function update(Request $request, $id)
    {
        Prestamo::find($id)->update($request->all());
        return redirect()->route('prestamo.index');
    }
    public function destroy($id)
    {
        Prestamo::find($id)->delete();
        return redirect()->route('prestamo.index');
    }
}
