<?php


use App\Http\Controllers\UserController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('user')->group(function () {

    Route::get('/', [UserController::class, 'index']);
    Route::post('/create', [UserController::class, 'store']);
    Route::post('/create', [UserController::class, 'store']);

});

