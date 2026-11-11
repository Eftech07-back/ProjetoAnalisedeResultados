<?php
use \app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
return view ('Login');
});
//Route::get('/login', [Controller::Class, 'auth']);

Route::get('/paginainicial', function () {
return view ('teste');
});
Route::post('/usuarios/salvar', [UsuarioController::class, 'store']) ->name ('usuarios_store');
 