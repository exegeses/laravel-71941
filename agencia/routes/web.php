<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::método('peticion', acción)
Route::view('/saludo.html', 'vista');
Route::get('/datos', function()
{
    //return 'hola mundo';
    return [
                'curso' => 'Desarrollo con Laravel',
                'codigo' => 71941,
                'inicio' => '20-07-2024',
                'fin' => '28-09-2024'
           ];
});
Route::get('/vista', function()
{
    //proceso que vamos a escribir luego
    $curso = 'Desarrollo con Laravel';
    //Retorno de una vista + pasaje de datos
    return view('vista',
                 [
                     'curso' => $curso,
                     'numero' => 7,
                     'zeppelin' => [
                                    'Jimmy Page',
                                    'Robert Palnt',
                                    'John Paul Jones',
                                    'Bonzo Bonham'
                                   ]
                 ]);
});

Route::view('/', 'dashboard');
/*#########################*/
##### CRUD de regiones
Route::get('/regiones', function ()
{
    //obtenemos listado de regiones
    $regiones = DB::select('SELECT * FROM regiones');
    return view('regiones', [ 'regiones'=>$regiones ]);
});
