
<?php

/**aqui llama a la pag (vista) principal de laravel que trae por defecto*/
//Route::get('/', function () {
//    return view('welcome');
//});

/**aqui llama a la pag (vista) principal de laravel que cree con blade - bootstrap*/
Route::get('/', function () {
   return view('home');
});

/**para una vista que muestra solo una cadena de caracteres:*/

//Route::get('/usuario', function (){
  // return 'Usuarios';
//});


/**para llamar a las vistas a traves de la funcion creada en el controlador ControladorUsuario*/
//nombre del controlador@nombreDeLaFuncion
/*Route::get('/usuario', 'ControladorUsuario@index');

Route::get('/usuarioPlantilla', 'ControladorUsuario@index2');

*/

//tipo get es para mostrar el formulario
Route::get('/registrar', 'ControladorUsuario@registro'); // /registrar
//tipo post para enviar datos desde el formulario para ser procesados
Route::post('/registrar', 'ControladorUsuario@store'); // /registrar'

// /login
//Route::get('/login', 'ControladorLogin@login'); 
Route::post('/login', 'ControladorLogin@login'); 


//pantalla del registrar viajero
Route::get('/registroViajero', 'ControladorViajero@registrarviajero'); 
Route::post('/registroViajero', 'ControladorViajero@storeViajero');


//Route::get('/registroViajero/{id}', 'ControladorViajero@destroy');
//Route::post('/registroViajero/{id}', 'ControladorViajero@destroy');


Route::get('/editarViajero/{id}', 'ControladorEditarViajero@show');
Route::post('/editarViajero/{id}', 'ControladorEditarViajero@show');


//clic boton editar pantalla viajero
Route::get('/registroViajero/{id}', ['as' => 'registroViajero', 'uses' => 'ControladorViajero@edit']); 
Route::post('/registroViajero/{id}', ['as' => 'registroViajero', 'uses' => 'ControladorViajero@edit']);

//pantalla editar
Route::get('/editarViajero/', 'ControladorEditarViajero@editarviajero');

Route::get('/editarViajero/{id}', ['as' => 'editarViajero', 'uses' => 'ControladorViajero@edit']); 

Route::post('/editarViajero/{id}', ['as' => 'updateViajero', 'uses' => 'ControladorEditarViajero@updateViajero']);

//modificar viajero
//Route::get('/editarViajero/{id}', ['as' => 'editarViajero', 'uses' => 'ControladorEditarViajero@updateViajero']); 
//Route::post('/editarViajero/{id}', ['as' => 'editarViajero', 'uses' => 'ControladorEditarViajero@updateViajero']); 


//viaje
Route::get('/registroViaje', 'ControladorViaje@registroviaje');  
Route::post('/registroViaje', 'ControladorViaje@storeViaje');


Route::get('/show', 'ControladorShow@show'); 

