<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    return view('normal.bookDetail');
});

Route::post('/normal/delete',[NormalDbController::class,'deleteCheck']);
Route::post('/normal/deleteComplete',[NormalDbController::class,'deleteComment']);

Route::get('/3', function () {
    return view('admin.newBookComplete');
});

Route::get('/1', function () {
    return view('normal.index');
});
// Route::get('/2', function () {
//     return view('admin.index2');
// });
Route::get('/admin/new-book', function () {
    return view('admin.newBook');
})->name('newBook');

/*Route::get('/admin/index2', function () {
    return view('admin.index2');
})->name('admin.index2');*/


//Route::get('/admin/newBookComplete', [AccController::class,'store'] ) ;
Route::post('/admin/newBookComplete', [AccController::class,'store'] ) ;


// こっちだけ残す！
Route::get('/admin/index2', [AccController::class,'allshow'])->name('admin.index2');


