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

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/jugadores', function(){

    $jugadores=['ramos','cuadrado','marin','quintana','villota','martinez'];
    $posiciones=['defensa','delantero','defensa','delantero','defensa','delantero'];

    return view('pantalla1',
    
        [

            'jugadores'=>$jugadores,
            'posiciones'=>$posiciones
        ]);

});

Route:: get('/equipos', function(){

    $equipos=['PASTO','MILLONARIOS','AMERICA','NACIONAL','MEDELLIN','TOLIMA'];

    return view('pantalla2',
    
        [

            'equipos'=>$equipos
        ]);

});
