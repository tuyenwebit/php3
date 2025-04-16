<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoTableLoaiSP extends Migration
{
    public function up()
    {
        Schema::create('loaiSP', function (Blueprint $table) {
            $table->id();
            $table->string('tenLoai', 30)->unique();
            $table->integer('thuTu')->default(0);
            $table->boolean('anHien')->default(1);
            $table->string('urlHinh', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loaiSP');
    }
}