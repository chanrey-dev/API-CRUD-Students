<?php

use App\Http\Controllers\APIStduentController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('api-stduent', [APIStduentController::class, 'index'])->name('/api-stduent');
Route::post('api-stduent', [APIStduentController::class, 'store'])->name('/api-stduent');
Route::delete('api-stduent/{id}', [APIStduentController::class, 'delete'])->name('/api-stduent');