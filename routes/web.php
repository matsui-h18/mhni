<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    return view('normal2.index');
});

Route::get('/normal/index', [NormalDbController::class, 'allshow'])->name('normal.index');


Route::post('/normal/delete',[NormalDbController::class,'deleteCheck']);
Route::post('/normal/deleteComplete',[NormalDbController::class,'deleteComment']);

Route::get('/3', function () {
    return view('admin.newBookComplete');
});

Route::get('/1', function () {
    return view('normal.index');
});


// 以下、一般社員用
Route::get('/', [NormalDbController::class, 'allshow']); //allshowメソッド
// Route::get('/normal/index', function () {
//     return view('normal.index');
// })->name('index');
Route::get('/normal/index', [NormalDbController::class, 'allshow'])->name('normal.index');

// GET（URLからアクセスする場合）
Route::get('/normal/bookDetail/{id}', [NormalDbController::class, 'showBookDetail'])->name('normal.bookDetail.get');

// POST（フォームからアクセスする場合）
Route::post('/normal/bookDetail', [NormalDbController::class, 'showBookDetail'])->name('normal.bookDetail.post');



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




// // 中島
// Route::get('/admin/index2', [AccController::class, 'allshow'])
// ->middleware(['auth'])->name('support');

// Route::get('/normal/index', [LibraryController::class,'index'])
// ->middleware(['auth'])->name('dashboard');

// // Route::get('/book/{id}',[::class,'show'])
// // => name('book.show');



// // テスト用
// Route::get('/test-login', [TestLoginController::class, 'show'])->name('login');
// Route::post('/test-login', [TestLoginController::class, 'login'])->name('test.login');



