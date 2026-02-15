<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LeadController;

Route::post('/accounts', [AccountController::class, 'store']);
Route::post('/leads', [LeadController::class, 'store']);
