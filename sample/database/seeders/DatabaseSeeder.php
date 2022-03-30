<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // ***** 追加 *****
        // BooksTableSeederを読み込むように指定
        $this->call(BooksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
