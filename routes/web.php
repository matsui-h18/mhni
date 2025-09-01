<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    return view('admin.index2');
});
Route::get('/3', function () {
    return view('admin.newBookComplete');
});

Route::get('/1', function () {
    return view('normal.index');
});



// 以下、経理部用
Route::get('/', [AccController::class, 'allshow']); //allshowメソッド
Route::get('/admin/new-book', function () {
    return view('admin.newBook');
})->name('newBook');

Route::post('/admin/newBookComplete', [AccController::class,'store']);
Route::get('/admin/index2', [AccController::class,'allshow'])->name('admin.index2'); //自動遷移

//データ編集用
Route::post('admin/bookEdit',[AccController::class,'edit']);
Route::post('admin/bookEditComplete',[AccController::class,'update']);


