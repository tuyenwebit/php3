<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhvienTable extends Migration
{
    public function up()
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->id();
            $table->string('hoTen', 100);
            $table->string('password', 100);
            $table->string('email', 200);
            $table->string('randomkey', 100)->nullable();
            $table->boolean('active')->default(0);
            $table->integer('idGroup')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('thanhvien');
    }
}