<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('prestamo','PrestamoController');

Route::resource('publicacion','PublicacionController');

Route::resource('prestamista','PrestamistaController');

Route::resource('autor','AutorController');

Route::resource('editorial','EditorialController');

Route::resource('tema','TemaController');

Route::resource('idioma','IdiomaController');

Route::resource('evento','EventoController');

Route::get('/','Auth\LoginCOntroller@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/pdfpublicaciones','PdfController@PdfPublicaciones')->name('descargarPdfPublicaciones');

Route::get('/pdfprestamos','PdfController@PdfPrestamos')->name('descargarPdfPrestamos');

Route::get('/pdfprestamistas','PdfController@PdfPrestamistas')->name('descargarPdfPrestamistas');

Route::get('grafico','GraficoController@index');