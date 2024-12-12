<?php

use App\Http\Controllers\ValentineController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ValentineController::class, 'index']);
