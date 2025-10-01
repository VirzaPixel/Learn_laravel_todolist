<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActivityController::class, 'index']);
Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
