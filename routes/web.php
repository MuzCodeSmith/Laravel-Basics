<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DropDownController;


Route::get('/', function () {
    return view('welcome');
});
 
Route::get('dropdown',[DropDownController::class,'index']);
Route::post('api/fetch-state',[DropDownController::class,'fetchState']);