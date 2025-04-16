<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoTableDienThoai extends Migration
{
    public function up()
    {
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->id();
            $table->string('tenDT', 30)->nullable(false);
            $table->dateTime('ngayCapNhat')->nullable();
            $table->double('gia', 8, 2)->default(0);
            $table->string('urlHinh', 200)->nullable();
            $table->integer('soLuongTonKho')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('anhien')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dienthoai');
    }
}