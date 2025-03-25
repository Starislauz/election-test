<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectionController;

// Display results for a polling unit
Route::get('/polling-unit/{id}', [ElectionController::class, 'showPollingUnitResults']);

// Display total results for an LGA
Route::get('/lga-results', [ElectionController::class, 'showLgaResults']);

// Store results for a new polling unit
Route::post('/polling-unit/store', [ElectionController::class, 'storePollingUnitResults']);

