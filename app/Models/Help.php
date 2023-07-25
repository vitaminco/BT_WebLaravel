<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $fillable = ["cau_hoi", "tra_loi", "anh_help", "ghi_chu"];
}
