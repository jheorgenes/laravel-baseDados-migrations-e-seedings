<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 formula de adicionar seeder usando users directly
        // DB::table('users')->insert([
        //     'username' => 'User1',
        //     'password' => bcrypt('senha'), // password_hash('senha', PASSWORD_DEFAULT)
        //     'active' => true
        // ]);

        // 2 formula de adicionar seeder usando arrays
        // $users = [
        //     [
        //         'username' => 'User2',
        //         'password' => bcrypt('senha2'),
        //     ],
        //     [
        //         'username' => 'User3',
        //         'password' => bcrypt('senha2'),
        //     ],
        //     [
        //         'username' => 'User4',
        //         'password' => bcrypt('senha2'),
        //     ],
        // ];

        // DB::table('users')->insert($users);

        // 3 formula de adicionar usuários com valores randômicos
        $users = [];
        for ($index=0; $index < 10; $index++) {
            $users[] = [
                'username' => Str::random(10),
                'password' => bcrypt('senha'),
                'active' => (bool) rand(0, 1)
            ];
        }
        DB::table('users')->insert($users);
    }
}
