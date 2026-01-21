<?php

use App\Http\Controllers\BsMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/members', [BsMemberController::class, 'index']);
Route::post('/members', [BsMemberController::class, 'store']);