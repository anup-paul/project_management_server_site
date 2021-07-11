<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProjectListController;
use \App\Http\Controllers\TaskListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/projects',[ProjectListController::class,'index']);
Route::post('/projects',[ProjectListController::class,'store']);
Route::put('/projects/{id}',[ProjectListController::class,'update']);
Route::delete('/projects/{id}',[ProjectListController::class,'destroy']);


Route::get('/tasks',[TaskListController::class,'index']);
Route::post('/tasks',[TaskListController::class,'store']);
Route::put('/tasks/{id}',[TaskListController::class,'update']);
Route::delete('/tasks/{id}',[TaskListController::class,'destroy']);




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
