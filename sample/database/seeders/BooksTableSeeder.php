<?php

namespace database\seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// ***** 追加 *****
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ***** 追加開始 *****
        $tableName = 'books';
        // テーブルのクリア
        DB::table($tableName)->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $books = [
                  ['name' => 'PHP Book',
                   'price' => 2000,
                   'author' => 'PHPER'],
                  ['name' => 'Laravel Book',
                   'price' => 3000,
                   'author' => null],
                  ['name' => 'Ruby Book',
                   'price' => 2500,
                   'author' => 'Rubyist']
                 ];

        // 登録
        foreach($books as $book) {
          Book::create($book);
        }
        // ***** 追加終了 *****
    }
}
