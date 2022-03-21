<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => '渡邉雅広',
                'email' => 'masahiro.watanabe02@gmail.com',
                'password' => Hash::make("12345678"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
