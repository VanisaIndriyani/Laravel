<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContacsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacs')->insert([
            'nama' => 'vanisa',
            'email' => 'vanisa',
            'pesan' => 'Halo, ini adalah pesan pertama.',
        ]);
    }
}
