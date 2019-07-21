<?php

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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'MessagesController@store');

// Route::resource('projects', 'PortfolioController');

// Route::get('/', function () {
//     $nombre = "Alejandra Loreto";
//     return view('home')->with('nombre', $nombre);
// });

// Route::get('contactanos', function(){
//     return "Sección de contactos";
// })->name('contactos');

// Route::get('/', function () {
//     echo "<a href='".route('contactos')."'>Contactos 1</a>";
// });
