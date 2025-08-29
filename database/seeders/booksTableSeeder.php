<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('comments')->truncate();
        DB::table('books')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('books') -> insert([
            'book_name' => 'スッキリわかるJava入門　第4版',
            'author' => '中山清喬,国本大悟',
            'pub_date' => '2023-11-06',
            'isbn' => '9784295017936',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('books') -> insert([
            'book_name' => '図解でやさしくわかる ネットワークのしくみ超入門',
            'author' => '',
            'pub_date' => '2022-06-18',
            'isbn' => '9784297128524',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('books') -> insert([
            'book_name' => '新しいLinuxの教科書　第２版',
            'author' => '三宅英明,大角祐介',
            'pub_date' => null,
            'isbn' => '9784815624316',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
