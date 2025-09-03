<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BackToStartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAddLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;
use App\Http\Controllers\BooksearchContoller;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TestLoginController;
use App\Http\Controllers\NormalDbController;

Route::get('/', function () {
    // return view('normal.index3');
    return view('auth.login');
});




//岩本
Route::get('/normal/index', [NormalDbController::class, 'allshow'])->name('normal.index');
//岩本追加
Route::get('/normal/bookDetailComment', [NormalDbController::class, 'allcommentshow']);



Route::post('/normal/commentEdit', [NormalDbController::class, 'edit'])->name('commentEdit');

Route::post('/normal/commentEditComplete', [NormalDbController::class, 'editComplete'])->name('commentEditComplete');
Route::get('/normal/bookDetail', [normalDbController::class, 'show'])->name('normal.bookDetail');
Route::get('/3', function () {
    return view('admin.newBookComplete');
});

Route::get('/admin/index2', function () {
    return view('admin/index2');
})->middleware(['auth'])->name('support');

Route::get('/normal/index', function () {
    return view('normal/index');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/my-login', [AuthenticatedSessionController::class, 'store'])
    ->name('my-login');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/back-to-start', [BackToStartController::class, 'redirect'])
    ->middleware('auth')
    ->name('back.to.start');

Route::post('/management/users', [AdminUserController::class, 'store'])
    ->middleware('auth')->name('management.users.store');

Route::get('/user-add-login', [UserAddLoginController::class, 'showLoginForm'])
    ->name('user.add.login');
Route::post('/user-add-login', [UserAddLoginController::class, 'login']);

Route::get('/management/users', [AdminUserController::class, 'index'])
    ->middleware('auth')
    ->name('management.users.index');

Route::get('/management/users/create', [AdminUserController::class, 'create'])
    ->middleware('auth')
    ->name('management.users.create');

Route::delete('/management/users/{id}', [AdminUserController::class, 'destroy'])
    ->middleware('auth')
    ->name('management.users.destroy');

Route::get('/management/users/{id}/edit', [AdminUserController::class, 'edit'])
    ->middleware('auth')
    ->name('management.users.edit');

Route::put('/management/users/{id}', [AdminUserController::class, 'update'])
    ->middleware('auth')
    ->name('management.users.update');

require __DIR__ . '/auth.php';
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
// 経理用最初の画面
Route::get('/admin/index2', [AccController::class, 'allshow'])
->middleware(['auth'])->name('support');

// 一般ユーザ用最初の画面
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

Route::get('/bookEdit/{id}', [LibraryController::class, 'edit'])
->name('bookEdit');

Route::post('/bookUpdate', [LibraryController::class, 'update'])
->name('bookUpdate');

Route::get('/books/search', [LibraryController::class, 'research'])->name('bookSearch');


// コメント
Route::post('/normal/deleteComplete',[LibraryController::class,'deleteComment'])
->name('comdel');

Route::post('/normal/delete',[LibraryController::class,'deleteCheck'])
->name('commentDelete');

Route::post('/normal/commentAdd',[LibraryController::class,'addcheck'])
->name('commentAdd');

Route::post(('/normal/commentEdit'),[LibraryController::class,'commentEdit'])
->name('commentEdit');

Route::post(('/normal/commentEditComplete'),[LibraryController::class,'updateComment'])
->name('editComp');




// テスト用
Route::get('/test-login', [TestLoginController::class, 'show'])->name('test.login.form');
Route::post('/test-login', [TestLoginController::class, 'login'])->name('test.login');


/*☆☆☆☆☆☆☆☆　以下、松井編集　☆☆☆☆☆☆☆☆*/

Route::get('/show', [NormalDbController::class, 'allshow']);


// 一般ユーザの本一覧を全件表示する
Route::get('/normal/index3',[NormalDbController::class,'allshow']);


//一覧から詳細画面へ移動する用
// Route::get('/normal/bookDetailMove', function () {
//     return view('normal.bookDetail');
// })->name('bookDetail');


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
// Route::get('/admin/bookEdit', function () {
//     return view('admin.bookEdit');
// })->name('bookEdit');
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
