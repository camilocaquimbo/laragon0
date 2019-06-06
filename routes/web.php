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

use Illuminate\Http\Request;

App::setlocale('es');

Route::get('/', function () {
    //return view('welcome');
    //return view('home');
    $links = \App\Link::all();

    return view('welcome', ['links' => $links]);
});

Route::get('ver', function() {
    return App\Link::all();
});

Route::get('/submit', function()
{
  return view('submit');
});

Route::post('/submit', function(Request $request)
{
  $data = $request->validate([
    'title' => 'required|max:255',
    'url' => 'required|url|max:255',
    'description' => 'required|max:255'
  ]);

  $link = tap(new App\Link($data))->save();

  return redirect('/');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//////////

$elem = [
  ['elem1' => 'Elemento 1ro'],
  ['elem1' => 'Elemento 2'],
  ['elem1' => 'Elemento 3'],
//  ['elem1' => 'Elemento 4'],
//  ['elem1' => 'Elemento 5'],
//  ['elem1' => 'Elemento 6'],
];

Route::view('/test0', 'test0', compact('elem'))->name('elem');

//Route::get('/test2', 'Prueba1Controller@index');

Route::get('/test2', 'Prueba1Controller')->name('Test2'); //con invoke

Route::resource('MPrueba2', 'MPrueba2Controller'); //se pueden especificar que se omitan ciertos métodos del controlador _revisar

//////////

Route::view('/contacto', 'contacto')->name('contacto');

Route::post('contacto', 'Prueba1Controller@store');