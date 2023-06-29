<?php

use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\UserController;
use App\Models\Funcionarios;
use App\Models\Gerentes;
use Illuminate\Support\Facades\Route;

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

Route::get('user/{user}', [UserController::class, "show"])->name('user.show');
Route::get('users', [UserController::class, "index"])->name('user.index');
Route::get('pessoas/create', [PessoasController::class, "create"])->name('pessoas.create');
Route::post('pessoas/store', [PessoasController::class, "store"])->name('pessoas.store');
Route::get('pessoas/index', [PessoasController::class, "index"])->name('pessoas.index');
Route::get('pessoas/show', [PessoasController::class, "show"])->name('pessoas.show');
Route::get('pessoas/destroy/{id}', [PessoasController::class, "destroy"])->name('pessoas.destroy');
Route::get('pessoas/edit', [PessoasController::class, "edit"])->name('pessoas.edit');




Route::get('/', function () {
    return view('welcome');
})->name("hello");
