<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// ***** 追加 *****
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ***** 追加開始 ***** レビュー
        $tableName = 'users';
        // テーブルのクリア
        DB::table($tableName)->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $users = [
                    ['name' => 'satoshi',
                    'age' => 42],
                    ['name' => 'shou',
                    'age' => 40],
                    ['name' => 'masaki',
                    'age' => 40],
                    ['name' => 'kazunari',
                    'age' => 39],
                    ['name' => 'jun',
                    'age' => 39]
                    ];

        // 登録
        foreach($users as $user) {
            User::create($user);
        }
        // ***** 追加終了 *****
    }
}
