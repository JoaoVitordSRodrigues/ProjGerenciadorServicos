<?php

use Illuminate\Support\Facades\Route;
use App\Models\Servico;

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
    $firstService = new Servico;
    $firstService-> nome = "pintor";
    $firstService-> telefone = "123456789";
    $firstService-> save();
    return view('welcome');
});
