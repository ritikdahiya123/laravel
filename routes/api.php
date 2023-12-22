<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getapiController;

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
Route::get('/list/{id?}',[getapiController::class,'list']);
Route::post('/post',[getapiController::class,'post']);
Route::put('/put',[getapiController::class,'put']);
Route::get('/search/{id}',[getapiController::class,'search']);
Route::delete('/delete/{id}',[getapiController::class,'delete']);




