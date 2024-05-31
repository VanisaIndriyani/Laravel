<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Menjalankan seeder database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'vanisa indri',
            'email' => 'vanisa30@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
