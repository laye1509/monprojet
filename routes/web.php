<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;



Route::get('/', function () {
    return view('layout');
    
});
Route::get('/myview', [MyController::class, 'index']);
