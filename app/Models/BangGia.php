<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangGia extends Model
{
    use HasFactory;
    protected $fillable = ["doi_tuong", "gia_giam", "loai_sp", "anh_cover", "mo_ta", "ghi_chu"];
}
