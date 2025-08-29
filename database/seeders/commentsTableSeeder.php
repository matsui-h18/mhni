<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('comments')->truncate();

        DB::table('comments') -> insert([
            'evaluation' => '3',
            'comment' => '面白かった',
            'user_id' => '1',
            'book_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('comments') -> insert([
            'evaluation' => '4',
            'comment' => '楽しかった',
            'user_id' => '1',
            'book_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('comments') -> insert([
            'evaluation' => '4',
            'comment' => 'ためになった',
            'user_id' => '2',
            'book_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('comments') -> insert([
            'evaluation' => '5',
            'comment' => 'この本は初心者にも非常にわかりやすく書かれていて、章ごとの構成も論理的で読みやすかったです。特に第3章の説明は実務にも役立つ内容で、何度も読み返しました。図解も豊富で理解が深まりました。おすすめです！!この書籍は内容が非常に充実しており、初心者から中級者まで幅広く対応しています。特に実例を交えた解説が多く、理解しやすい構成になっている点が魅力です。図や表も豊富で、読んでいて飽きることがありません。',
            'user_id' => '3',
            'book_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('comments') -> insert([
            'evaluation' => '4',
            'comment' => 'ためになった',
            'user_id' => '1',
            'book_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
