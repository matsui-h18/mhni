<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;

Route::get('/', function () {
     return view('normal.bookDetail');
});
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


