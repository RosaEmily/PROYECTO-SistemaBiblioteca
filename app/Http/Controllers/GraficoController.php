<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $registrospublic=DB::select('call prestamosxpublicacion()');
        $registrospresta=DB::select('call prestamosxprestamista()');
        return view('prestamo.graficosig',['registrospublic'=>$registrospublic,'registrospresta'=>$registrospresta]);
    }
}
