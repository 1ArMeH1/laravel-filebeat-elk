<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-user/{id}',[TestController::class,'index']);

Route::get('/log-info',[TestController::class,'info']);
Route::get('/log-alert',[TestController::class,'alert']);
Route::get('/log-warning',[TestController::class,'warning']);
Route::get('/log-error',[TestController::class,'error']);
