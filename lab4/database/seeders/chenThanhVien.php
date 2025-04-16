<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class chenThanhVien extends Seeder
{
    public function run()
    {
        $hoTenList = ['Nguyen Le', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi', 'Tam', 'Van', 'Đức', 'Ngọc', 'Hoang', 'Minh', 'Kim', 'Tu', 'Hau', 'Thanh', 'Tứ', 'Hương', 'Phuong'];

        for ($i = 0; $i < 100; $i++) {
            $randomHoTen = $hoTenList[array_rand($hoTenList)];
            $randomString = Str::random(5);
            $randomCreatedAt = Carbon::now()->addDays(rand(0, 3));

            DB::table('thanhvien')->insert([
                'hoTen' => $randomHoTen,
                'password' => bcrypt('hehe'),
                'email' => $randomString . '@gmail.com',
                'randomkey' => null, // Để trống
                'active' => 0, // Mặc định là 0
                'idGroup' => rand(1, 5), // Ngẫu nhiên từ 1 đến 5
                'created_at' => $randomCreatedAt,
                'updated_at' => $randomCreatedAt,
            ]);
        }
    }
}