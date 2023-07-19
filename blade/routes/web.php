<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;


Route::view('/', 'index')-> name('index');
Route::view('/about', 'about')-> name('about');
Route::view('/services', 'services')-> name('services');
Route::view('/contact', 'contact')-> name('contact');


// Ruta de usuarios
Route::get('/user', [UserController::class, 'index']) -> name('user.index');
Route::get('/user/create', [UserController::class, 'create']) -> name('user.create');




// Rutas de Posts
Route::resource('posts', PostController::class);


// Rutas de Posts
Route::resource('/notes', NoteController::class);
























/*
    // Rutas de Notas
    // GET ALL
        Route::get('/note', [NoteController::class, 'index']) -> name('notes.index');
    // POST
        Route::get('/note/create', [NoteController::class, 'create']) -> name('notes.create');
        Route::post('/note/store', [NoteController::class, 'store']) -> name('notes.store');
    // PUT
        Route::get('/note/edit/{note}', [NoteController::class, 'edit']) -> name('notes.edit');
        Route::put('/note/update/{note}', [NoteController::class, 'update']) -> name('notes.update');
    // GET ONE
        Route::get('/note/show/{note}', [NoteController::class, 'show']) -> name('notes.show');
    // DELETE
        Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy']) -> name('notes.destroy');
*/
