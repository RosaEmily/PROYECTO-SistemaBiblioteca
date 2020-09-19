<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evento;

class EventoController extends Controller
{
    public function index(Request $request)
    {
        $eventos=Evento::all();
        return view('evento.index',['eventos'=>$eventos]);
    }

    public function store(Request $request)
    {
        $datosEvento=request()->except(['_token','_method']);
        Evento::insert($datosEvento);
        print_r($datosEvento);
    }

    public function show()
    {
        $data['eventos']=Evento::all();
        return response()->json($data['eventos']);
    }

    public function destroy($id)
    {
        $evento=Evento::findOrFail($id);
        Evento::destroy($id);
        return response()->json($id);
    }
}
