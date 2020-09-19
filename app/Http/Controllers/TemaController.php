<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;

class TemaController extends Controller
{
    public function index(Request $request)
    {
        $temas=Tema::all();
        return view('tema.index',['temas'=>$temas]); 
    }
    public function create()
    {
        return view('tema.create');
    }
    public function store(Request $request)
    {
        Tema::create($request->all());
        return redirect()->route('tema.index');
    }
    public function edit($id)
    {
        $tema=Tema::find($id);
        return view('tema.edit',['tema'=>$tema]);
    }
    public function update(Request $request, $id)
    {
        Tema::find($id)->update($request->all());
        return redirect()->route('tema.index');
    }
    public function destroy($id)
    {
        Tema::find($id)->delete();
        return redirect()->route('tema.index');
    }
}
