<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'user2',
        //     'email' => 'user2@email.com',
        //    'password' => bcrypt('password'),
        // ]);
    }
}