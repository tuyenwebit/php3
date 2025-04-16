<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaiSP extends Seeder
{
    public function run()
    {
        DB::table('loaiSP')->insert([
            ['tenLoai' => 'Sam sung', 'thuTu' => 1, 'anHien' => 1],
            ['tenLoai' => 'HTC', 'thuTu' => 2, 'anHien' => 1],
            ['tenLoai' => 'Apple', 'thuTu' => 3, 'anHien' => 1],
            ['tenLoai' => 'LG', 'thuTu' => 4, 'anHien' => 1],
            ['tenLoai' => 'Motorola', 'thuTu' => 5, 'anHien' => 1],
            ['tenLoai' => 'Nobel', 'thuTu' => 6, 'anHien' => 1],
        ]);
    }
}