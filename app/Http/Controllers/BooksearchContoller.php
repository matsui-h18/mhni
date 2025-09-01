<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BooksearchContoller extends Controller
{
    public function searchByIsbn(Request $request)
    {
        $isbn = $request->input('isbn');

        if (empty($isbn)) {
            return redirect()->back()->with('error', 'ISBNコードを入力してください');
        }

        $client = new \GuzzleHttp\Client();
        $url = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' . urlencode($isbn);

        try {
            $response = $client->request('GET', $url);
            $body = json_decode($response->getBody(), true);

            if (empty($body['items'])) {
                return redirect()->back()->with('message', '該当する書籍が見つかりませんでした');
            }

            $book = $body['items'][0]['volumeInfo'];

            return view('admin.isbnsearchresult', [
                'book_name' => $book['title'] ?? '不明',
                'author' => $book['authors'] ?? ['不明'],
                'pub_date' => $book['publishedDate'] ?? '不明',
                'content' => $book['description'] ?? '説明なし',
                'image' => $book['imageLinks']['thumbnail'] ?? null,
                'isbn' => $isbn,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '検索中にエラーが発生しました');
        }
    }

    public function store(Request $request)
    {
        // タイトルが「不明」の場合は登録しない
        if ($request->book_name === '不明') {
            return redirect()->route('isbn')->with('error', 'タイトルが不明の書籍は登録できません');
        }

        // ISBNで重複チェック
        $exists = \App\Models\Book::where('isbn', $request->isbn)->exists();

        if ($exists) {
            return redirect()->route('isbn')->with('message', 'このISBNの書籍はすでに登録されています');
        }

        // 登録処理
        \App\Models\Book::create([
            'isbn' => $request->isbn,
            'book_name' => $request->book_name,
            'author' => $request->author,
            'pub_date' => $request->pub_date,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return redirect()->route('/isbn')->with('message', '書籍を登録しました');
    }
}
