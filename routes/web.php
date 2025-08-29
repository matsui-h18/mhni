<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('normal.bookDetail');
});
Route::get('/3', function () {
    return view('admin.newBook');
});

Route::get('/1', function () {
    return view('normal.index');
});
Route::get('/2', function () {
    return view('admin.index2');
});