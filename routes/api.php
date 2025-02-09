<?php

// use App\Http\Controllers\TaskController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api_key')->group(function ()  {
     Route::post('/todo/add', [App\Http\Controllers\TaskController::class,'add']);
     Route::post('/todo/status', [App\Http\Controllers\TaskController::class,'updateStatus']);
});
