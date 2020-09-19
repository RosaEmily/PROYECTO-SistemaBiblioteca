<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class EditorialController extends Controller
{
    public function index(Request $request)
    {
        $editoriales=Editorial::all();
        return view('editorial.index',['editoriales'=>$editoriales]); 
    }
    public function create()
    {
        return view('editorial.create');
    }
    public function store(Request $request)
    {
        Editorial::create($request->all());
        return redirect()->route('editorial.index');
    }
    public function show($id)
    {
        $editorial=Editorial::find($id);
        return  view('editorial.show',['editorial'=>$editorial]);
    }
    public function edit($id)
    {
        $editorial=Editorial::find($id);
        return view('editorial.edit',['editorial'=>$editorial]);
    }
    public function update(Request $request, $id)
    {
        Editorial::find($id)->update($request->all());
        return redirect()->route('editorial.index');
    }
    public function destroy($id)
    {
        Editorial::find($id)->delete();
        return redirect()->route('editorial.index');
    }
}
