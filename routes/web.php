<?php
use Illuminate\Http\request;

Route::get('/',[App\Http\Controllers\BookController::class,'awal']);
Route::get('/signin',[App\Http\Controllers\BookController::class,'signin']);
Route::post('/registrasi',[App\Http\Controllers\BookController::class,'registrasi']);
Route::get('/home',[App\Http\Controllers\BookController::class,'home']);
Route::get('/tabel',[App\Http\Controllers\BookController::class,'index']);
Route::get('/cari/{id}',[App\Http\Controllers\BookController::class,'cari']);
Route::post('/tambah',[App\Http\Controllers\BookController::class,'tambah']);
Route::get('/hapus/{id}',[App\Http\Controllers\BookController::class,'hapus']);
Route::get('/show/{id}',[App\Http\Controllers\BookController::class,'show']);
Route::post('/edit',[App\Http\Controllers\BookController::class,'edit']);
Route::post('/login',[App\Http\Controllers\BookController::class,'login']);
Route::get('/logout',[App\Http\Controllers\BookController::class,'logout']);