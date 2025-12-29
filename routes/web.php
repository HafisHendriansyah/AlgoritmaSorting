<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelectionSortController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selection-sort', [SelectionSortController::class, 'index']);
Route::post('/selection-sort/angka', [SelectionSortController::class, 'sortAngka']);
Route::post('/selection-sort/objek', [SelectionSortController::class, 'sortObjek']);
