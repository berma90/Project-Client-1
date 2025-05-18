<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'maulana',
            'email' => 'maulana@gmail.com',
            'password' => bcrypt('123123qweqwe'),
            'role' => 'admin',
            'kode_cabang' => 'pati',
            'userlevel_id' => 'abc',
            'avatar' => '',
        ]);
    }
}
