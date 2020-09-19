<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idioma;

class IdiomaController extends Controller
{
    public function index(Request $request)
    {
        $idiomas=Idioma::all();
        return view('idioma.index',['idiomas'=>$idiomas]); 
    }
    public function create()
    {
        return view('idioma.create');
    }
    public function store(Request $request)
    {
        Idioma::create($request->all());
        return redirect()->route('idioma.index');
    }
    public function edit($id)
    {
        $tema=Idioma::find($id);
        return view('idioma.edit',['idioma'=>$tema]);
    }
    public function update(Request $request, $id)
    {
        Idioma::find($id)->update($request->all());
        return redirect()->route('idioma.index');
    }
    public function destroy($id)
    {
        Idioma::find($id)->delete();
        return redirect()->route('idioma.index');
    }
}
