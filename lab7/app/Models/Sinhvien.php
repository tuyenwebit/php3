<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    protected $fillable = ['masv', 'hoten', 'tuoi', 'ngaysinh', 'cmnd', 'email'];
}
