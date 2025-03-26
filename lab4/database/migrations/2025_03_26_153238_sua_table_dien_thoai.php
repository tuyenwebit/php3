<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuaTableDienThoai extends Migration
{
    public function up()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->text('baiViet')->nullable();
            $table->string('ghiChu', 500)->nullable();
            $table->unsignedBigInteger('idLoai');
            $table->foreign('idLoai')->references('id')->on('loaiSP');
        });
    }

    public function down()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->dropForeign(['idLoai']);
            $table->dropColumn(['baiViet', 'ghiChu', 'idLoai']);
        });
    }
}