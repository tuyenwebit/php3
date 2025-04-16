<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(10)->create(); 
        DB::table('users')->insert([
            'name' => 'Vui Từng Phút Giây',
            'email' => 'vuiqua@gmail.com',
            'password' => bcrypt('hehe'),
            'idgroup' => 1,
            'diachi' => 'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Buồn Từng Phút Giây',
            'email' => 'buonqua@gmail.com',
            'password' => bcrypt('huhu'),
            'idgroup' => 1,
            'diachi' => 'TPHCM'
        ]);
        DB::table('users')->insert([
            'name' => 'Lê Hiểu Phước',
            'email' => 'lehieuphuoc35205@gmail.com',
            'password' => bcrypt('admin2005'),
            'idgroup' => 0,
            'diachi' => 'HN'
        ]);
    }
}
