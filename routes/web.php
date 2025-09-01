<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    return view('normal.bookDetail');
});
//岩本
Route::post('/normal/delete',[NormalDbController::class,'deleteCheck']);
Route::post('/normal/deleteComplete',[NormalDbController::class,'deleteComment']);

Route::post('/normal/commentEdit', [NormalDbController::class, 'edit'])->name('commentEdit');
Route::post('/normal/commentDelete', [NormalDbController::class, 'delete'])->name('commentDelete');

Route::post('/normal/commentEditComplete', [NormalDbController::class, 'editComplete'])->name('commentEditComplete');
Route::post('/normal/commentDeleteComplete', [NormalDbController::class, 'deleteComplete'])->name('commentDeleteComplete');
Route::get('/normal/bookDetail', [normalDbController::class, 'show'])->name('normal.bookDetail');
Route::get('/3', function () {
    return view('admin.newBookComplete');
});

Route::get('/1', function () {
    return view('normal.index');
});
// Route::get('/2', function () {
//     return view('admin.index2');
// });
Route::get('/admin/newbook', function () {
});


// 以下、経理部用
//Route::get('/', [AccController::class, 'allshow']); //allshowメソッド
Route::get('/admin/new-book', function () {
    return view('admin.newBook');
})->name('newBook');

Route::post('/admin/newBookComplete', [AccController::class,'store']);
Route::get('/admin/index2', [AccController::class,'allshow'])->name('admin.index2'); //自動遷移

//データ編集用
Route::post('admin/bookEdit',[AccController::class,'edit']);
Route::post('admin/bookEditComplete',[AccController::class,'update']);




// 中島
Route::get('/admin/index2', [AccController::class, 'allshow'])
->middleware(['auth'])->name('support');

Route::get('/normal/index', [LibraryController::class,'index'])
->middleware(['auth'])->name('dashboard');

// Route::get('/book/{id}',[::class,'show'])
// => name('book.show');



// テスト用
Route::get('/test-login', [TestLoginController::class, 'show'])->name('test.login.form');
Route::post('/test-login', [TestLoginController::class, 'login'])->name('test.login');



