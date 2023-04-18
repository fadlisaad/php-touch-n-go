<?php

use Illuminate\Support\Facades\Route;
use FadliSaad\PHPTouchNGo\Http\Controllers\CreateOrderController;

Route::post('/create-order', [CreateOrderController::class, 'store'])->name('order.store');