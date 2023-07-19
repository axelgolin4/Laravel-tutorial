<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;






Route::get('/',[ExampleController::class,'index']);
Route::get('/no-access', [ExampleController::class,'noAccess'])->name('no-access');


Route::post('/create', [AuthController::class,'createUser']);
Route::post('/login', [AuthController::class,'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



