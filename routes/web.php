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




//岩本
Route::get('/normal/index', [NormalDbController::class, 'allshow'])->name('normal.index');


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
// Route::get('/admin/newbook', function () {



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

Route::get('/normal/index', [NormalDbController::class, 'allshow'])
->middleware(['auth'])->name('dashboard');

Route::post('isbnsearch', [BooksearchContoller::class, 'searchByIsbn'])
->name('isbnsearch');

Route::post('/isbnadd', [BooksearchContoller::class, 'store'])
->name('isbnadd');

Route::get('/nomal/book/{id}', [LibraryController::class, 'show'])
->name('bookshow');

Route::get('/isbn', [LibraryController::class, 'search'])
->name('isbn');



// テスト用
Route::get('/test-login', [TestLoginController::class, 'show'])->name('test.login.form');
Route::post('/test-login', [TestLoginController::class, 'login'])->name('test.login');


/*☆☆☆☆☆☆☆☆　以下、松井編集　☆☆☆☆☆☆☆☆*/

Route::get('/normal/index33', [NormalDbController::class, 'allshow']);


// 一般ユーザの本一覧を全件表示する
Route::get('/normal/index3',[NormalDbController::class,'allshow']);


//一覧から詳細画面へ移動する用
Route::get('/normal/bookDetailMove', function () {
    return view('normal.bookDetail');
})->name('bookDetail');


//詳細ページをidに従って表示させる
Route::get('/bookDetail/{id}', [NormalDbController::class, 'detailshow'])
->name('bookDetail');


// 新規登録画面「newBook」にアクセスしたときに、以下のルートが実行される
Route::get('/admin/newBook', function () {
    return view('admin.newBook');
})->name('newBook');
//->name('newBook')のように名前を付けることで
//aタグに「{{ route('newBook') }}」と書くことが可能


// ----------------------------本の情報を編集-----------------------------------------------
// 本の情報を編集「bookEdit」にアクセスしたときに、以下が実行される
Route::get('/admin/bookEdit', function () {
    return view('admin.bookEdit');
})->name('bookEdit');
//->name('bookEdit')のように名前を付けることで
//aタグに「{{ route('bookEedit') }}」と書くことが可能

Route::post('/admin/bookEditComplete', function () {
    // ここでフォームのデータを処理する（保存・更新など）
    return view('admin.bookEditComplete');
})->name('bookEditComplete');


//--------------------------------以下、編集完了画面用--------------------------------------
// 本の情報を編集完了画面「bookEditComplete」にアクセスしたときに、以下が実行される
Route::get('/admin/bookEditComplete', function () {
    return view('admin.bookEditComplete');
})->name('bookEditComplete');
//->name('bookEditComplete')のように名前を付けることで
//aタグに「{{ route('bookEditComplete') }}」と書くことが可能



//--------------------------------以下、削除画面用--------------------------------------
// 本の情報を削除する画面「bookDelete」にアクセスしたときに、以下が実行される
Route::get('/admin/bookDelete', function () {
    return view('admin.bookDelete');
})->name('bookDelete');
//->name('bookDelete')のように名前を付けることで
//aタグに「{{ route('bookDelete') }}」と書くことが可能


//--------------------------------以下、削除画面で「いいえ」を押してindex2に戻る用--------------------------------------
// 本の情報を削除する画面で「bookDelete」にアクセス・「いいえ」を押したとき用に、以下が実行される
Route::get('/admin/bookDeleteCancel', function () {
    return view('admin.index2');
})->name('backToIndex2');
//->name('bookDeleteComplete')のように名前を付けることで
//aタグに「{{ route('bookDeleteComplete') }}」と書くことが可能


//--------------------------------以下、「はい」を押して削除完了画面--------------------------------------
// 本の情報を削除完了画面「bookDeleteComplete」にアクセスしたときに、以下が実行される
Route::get('/admin/bookDeleteComplete', function () {
    return view('admin.bookDeleteComplete');
})->name('bookDeleteComplete');
//->name('bookDeleteComplete')のように名前を付けることで
//aタグに「{{ route('bookDeleteComplete') }}」と書くことが可能


//--------------------------------以下、削除完了後、自動遷移用--------------------------------------
// 本の情報を削除完了後「index2」に自動遷移、以下が実行される
Route::get('/admin/bookDeleteComplete_backToIndex2', function () {
    return view('admin.index2');
})->name('backToIndex2');
//->name('bookDeleteComplete')のように名前を付けることで
//aタグに「{{ route('bookDeleteComplete') }}」と書くことが可能


/*/*☆☆☆☆☆☆☆☆　以上、松井編集　☆☆☆☆☆☆☆☆*/
Route::get('/admin/bookDelete/{id}', [AccController::class, 'bookdelete'])->name('bookDelete');

Route::get('/admin/bookErase/{id}', [AccController::class, 'deleteComplete'])->name('bookDeleteComplete');
