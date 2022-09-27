<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


//トップページ表示

//トップ画面
Route::get('/', [TodoController::class, 'index']);


//作成
Route::post('/create', [TodoController::class, 'create']);
//更新
//Route::post('/update', [TodoController::class, 'update']);
Route::post('/update{id}', [TodoController::class, 'update'])->name('Todo.update');
//削除
Route::post('/remove{id}', [TodoController::class, 'remove'])->name('Todo.remove');