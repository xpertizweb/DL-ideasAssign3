<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
});

// DASHBOARD //

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// CATAGORY //

Route::get('catlist',[CatagoryController::class,'catshow']);

Route::post('catadd',[CatagoryController::class,'catlistadd']);
Route::view('catadd','catadd');

Route::get('catdelete/{id}',[CatagoryController::class,'catdelete']);

Route::get('catedit/{id}',[CatagoryController::class,'catedit']);
Route::post('catedit',[CatagoryController::class,'catupdate']);

// Hobby //

Route::get('tasklist',[TaskController::class,'taskshow']);

Route::post('taskadd',[TaskController::class,'tasklistadd']);
Route::get('taskadd',[TaskController::class,'taskadd']);
 

Route::get('delete/{id}',[TaskController::class,'taskdelete']);

Route::get('edit/{id}',[TaskController::class,'taskedit']);
Route::post('taskedit',[TaskController::class,'taskupdate']);