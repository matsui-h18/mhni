<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('normal.bookDetail');
});

Route::post('/normal/delete',[NormalDbController::class,'deleteCheck']);
Route::post('/normal/deleteComplete',[NormalDbController::class,'deleteComment']);

