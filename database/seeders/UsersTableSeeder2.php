<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 2 formula de adicionar seeder usando arrays
        $users = [
            [
                'username' => 'User2',
                'password' => bcrypt('senha2'),
            ],
            [
                'username' => 'User3',
                'password' => bcrypt('senha2'),
            ],
            [
                'username' => 'User4',
                'password' => bcrypt('senha2'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
