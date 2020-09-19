<?php

namespace App\Http\Controllers;

use App\Prestamista;
use Illuminate\Http\Request;

class PrestamistaController extends Controller
{
    public function index(Request $request)
    {
        $prestamistas=Prestamista::all();
        return view('prestamista.index',['prestamistas'=>$prestamistas]); 
    }
    public function create()
    {
        return view('prestamista.create');
    }
    public function store(Request $request)
    {
        Prestamista::create($request->all());
        return redirect()->route('prestamista.index');
    }
    public function show($id)
    {
        $prestamista=Prestamista::find($id);
        return  view('prestamista.show',['prestamista'=>$prestamista]);
    }
    public function edit($id)
    {
        $prestamista=Prestamista::find($id);
        return view('prestamista.edit',['prestamista'=>$prestamista]);
    }
    public function update(Request $request, $id)
    {
        Prestamista::find($id)->update($request->all());
        return redirect()->route('prestamista.index');
    }
    public function destroy($id)
    {
        Prestamista::find($id)->delete();
        return redirect()->route('prestamista.index');
    }
}
