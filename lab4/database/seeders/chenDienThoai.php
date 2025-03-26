<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class chenDienThoai extends Seeder
{
    public function run()
    {
        $tenDTs = ['Oppo XA', 'iPhone xs Max', 'Nokia Pro'];

        for ($i = 0; $i < 300; $i++) {
            DB::table('dienthoai')->insert([
                'tenDT' => $tenDTs[array_rand($tenDTs)], // Chọn ngẫu nhiên 1 trong 3 loại
                'ngayCapNhat' => Carbon::now(), // Ngày hiện tại
                'gia' => rand(25000, 50000),
                'urlHinh' => null, // Để trống
                'soLuongTonKho' => rand(10000, 100000), // Số lượng tồn kho ngẫu nhiên từ 10000 đến 100000
                'hot' => rand(0, 1), // Ngẫu nhiên 0 hoặc 1
                'anhien' => 1, // Mặc định là 1
                'baiViet' => null, // Để trống
                'ghiChu' => null, 
                'idLoai' => rand(1, 6), 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}