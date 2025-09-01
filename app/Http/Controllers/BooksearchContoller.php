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
            return response()->json(['error' => 'ISBNコードを入力してください'], 400);
        }

        $client = new Client();
        $url = 'https://www.googleapis.com/books/v1/volumes?q=isbn:' . urlencode($isbn);

        try {
            $response = $client->request('GET', $url);
            $body = json_decode($response->getBody(), true);

            if (empty($body['items'])) {
                return response()->json(['message' => '該当する書籍が見つかりませんでした'], 404);
            }

            $book = $body['items'][0]['volumeInfo'];

            return response()->json([
                'title' => $book['title'] ?? '不明',
                'authors' => $book['authors'] ?? [],
                'publishedDate' => $book['publishedDate'] ?? [],
                'description' => $book['description'] ?? [],
                'thumbnail' => $book['imageLinks']['thumbnail'] ?? null,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => '検索中にエラーが発生しました'], 500);
        }
    }
}
