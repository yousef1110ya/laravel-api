<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function () {
    return new JsonResponse([
        'status' => 200,
        'data' => [
            'name' => "get/users"
        ]
    ]);
});


Route::post('/user/create', function () {
    return new JsonResponse([
        'status' => 200,
        'data' => [
            'name' => "post/user/create"
        ]
    ]);
});
Route::patch('/user/update/{$id}', function () {
    return new JsonResponse([
        'status' => 200,
        'data' => [
            'name' => "patch/user/update/id"
        ]
    ]);
});
Route::delete('/user/delete/{$id}', function () {
    return new JsonResponse([
        'status' => 200,
        'data' => [
            'name' => "delete/user/delete/id"
        ]
    ]);
});
/*Route::get('/user/{$id}', function (App\Models\User $id) { 
    // if there is no seeded data in our database then this will give us a 404 not found
    // what this does in basic terms is it return the User with the id we want
    return new JsonResponse([
        'data' => $id
    ]);
});*/
