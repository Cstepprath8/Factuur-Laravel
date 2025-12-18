<?php
// Colin Stepprath
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactuurController;

Route::get('/factuur', [FactuurController::class, 'index']);
Route::post('/factuur', [FactuurController::class, 'calculate'])->name('factuur.calculate');


