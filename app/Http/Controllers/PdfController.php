<?php

namespace App\Http\Controllers;

use App\Prestamista;
use App\Prestamo;
use App\Publicacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function PDFPublicaciones()
    {
        $publicaciones=Publicacion::join('autores','autores.idautor','=','publicaciones.idautor')
        ->join('editoriales','editoriales.ideditorial','=','publicaciones.ideditorial')
        ->join('temas','temas.idtema','=','publicaciones.idtema')
        ->join('idiomas','idiomas.ididioma','=','publicaciones.ididioma')
        ->select('publicaciones.idpublicacion','publicaciones.publicacion','publicaciones.edicion','publicaciones.ISBNISSN','publicaciones.aniodepublicacion','publicaciones.tipo',
        'publicaciones.idautor','autores.autor as autor','publicaciones.ideditorial','editoriales.editorial as editorial',
        'publicaciones.idtema','temas.tema as tema','publicaciones.ididioma','idiomas.idioma as idioma')
        ->orderBy('publicaciones.idpublicacion')
        ->get();
        $pdf = PDF::loadView('pdf/publicaciones', compact('publicaciones'));
        return $pdf->download('Lista-de-publicaciones.pdf');
    }

    public function PDFPrestamos()
    {
        $prestamos=Prestamo::join('prestamistas','prestamistas.idprestamista','=','prestamos.idprestamista')
        ->join('publicaciones','publicaciones.idpublicacion','=','prestamos.idpublicacion')
        ->select('prestamos.idprestamo','prestamos.fechadeprestamo','prestamos.fechadedevolucion',
        'prestamos.idprestamista',Prestamo::raw('concat(prestamistas.nombres," ",prestamistas.apellidos) as prestamista'),
        'prestamos.idpublicacion','publicaciones.publicacion as publicacion')
        ->orderBy('prestamos.idprestamo')
        ->get();
        $pdf = PDF::loadView('pdf/prestamos', compact('prestamos'));
        return $pdf->download('Lista-de-prestamos.pdf');
    }

    public function PDFPrestamistas()
    {
        $prestamistas=Prestamista::orderBy('prestamistas.idprestamista')
        ->get();
        $pdf = PDF::loadView('pdf/prestamistas', compact('prestamistas'));
        return $pdf->download('Lista-de-prestamistas.pdf');
    }
}
