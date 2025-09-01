<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\BooksearchContoller;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    return view('test-login');
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




// 中島
Route::get('/admin/index2', [AccController::class, 'allshow'])
->middleware(['auth'])->name('support');

Route::get('/normal/index', [LibraryController::class,'index'])
->middleware(['auth'])->name('dashboard');

Route::post('isbnsearch', [BooksearchContoller::class, 'searchByIsbn'])
->name('isbnsearch');

Route::post('/isbnadd', [BooksearchContoller::class, 'store'])
-> name('isbnadd')

// Route::get('/book/{id}',[::class,'show'])
// => name('book.show');



// テスト用
Route::get('/test-login', [TestLoginController::class, 'show'])->name('test.login.form');
Route::post('/test-login', [TestLoginController::class, 'login'])->name('test.login');



