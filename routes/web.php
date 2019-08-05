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

Route::get('/', 'GeneralController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Las vistas de GeneralController se encuentras todas en la carpeta "generales" */
Route::get('nosotros', 'GeneralController@nosotros');
Route::get('staff', 'GeneralController@staff')->name('staff');
Route::get('terminos-y-condiciones', 'GeneralController@terminos');
Route::get('contacto', 'GeneralController@contacto');
Route::get('ayuda', 'GeneralController@ayuda');

/*Ventana para el panel administrativo */
Route::get('/admin', function () {
    return view('admin.panel');
})->middleware('auth', 'role:admin');

//Crear actuzalicaciones de proyectos aprobados
Route::get('propuestas/{id}/actualizaciones', 'ActualizacionesController@create')->middleware('auth', 'role:user')->name('actualizar');
Route::post('actualizaciones', 'ActualizacionesController@store')->middleware('auth', 'role:user')->name('actualizarStore');
Route::delete('actualizaciones/{id}', 'ActualizacionesController@destroy')->middleware('auth', 'role:user')->name('actualizarDestroy');

//Panel para las creaciones de propuestas
Route::resource('propuestas', 'PropuestasController')->middleware('auth', 'role:user');

//Comentarios de contacto
Route::get('contactoComentarios', 'ContactoController@index')->name('contactoComentarios')->middleware('auth', 'role:employee');
Route::post('contactoComentario', 'ContactoController@store')->name('contactoComentariosStore');


//Panel para las evaluaciones de propuestas
Route::resource('validar', 'ValidarPropuestasController')->except([
    'create', 'store', 'show', 'destroy'
]);

//educación
Route::get('educación', 'ProyectosController@educación')->name('educación');
Route::get('educación/{id}', 'ProyectosController@Show')->name('mostrarEducación');

//MedioAmbiente
Route::get('medioAmbiente', 'ProyectosController@medioAmbiente')->name('medioAmbiente');
Route::get('medioAmbiente/{id}', 'ProyectosController@Show')->name('mostrarmedioAmbiente');

//salud
Route::get('salud', 'ProyectosController@salud')->name('salud');
Route::get('salud/{id}', 'ProyectosController@Show')->name('mostrarSalud');

//comunitario
Route::get('comunitario', 'ProyectosController@comunitario')->name('comunitario');
Route::get('comunitario/{id}', 'ProyectosController@Show')->name('mostrarComunitario');

//innovación
Route::get('innovación', 'ProyectosController@innovacion')->name('innovación');
Route::get('innovación/{id}', 'ProyectosController@Show')->name('mostrarInnovación');

//divulgación
Route::get('divulgación', 'ProyectosController@divulgacion')->name('divulgación');
Route::get('divulgación/{id}', 'ProyectosController@Show')->name('mostrarDivulgación');

//arte
Route::get('arte', 'ProyectosController@arte')->name('arte');
Route::get('arte/{id}', 'ProyectosController@Show')->name('mostrarArte');

//pago
Route::post('/pago', 'StripeController@pago');

//mostrar donaciones de los proyectos

Route::resource('donaciones', 'DonacionesController')->only([
    'index', 'show'
]);

//test
Route::get('prueba', 'ProyectosController@test');

Route::post('/comentarios', 'ComentariosController@store')->name('comments.store');

//control

Route::delete('controlComentario/{id}', 'ControlController@destroyComentario')->name('destroyComentario')->middleware('auth', 'role:employee');
Route::delete('controlActualizacion/{id}', 'ControlController@destroyActualizacion')->name('destroyActualizacion')->middleware('auth', 'role:employee');


/*

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
composer dump-autoload


*/