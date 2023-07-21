<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CauHinh extends Model
{
    use HasFactory;
    protected $fillable = ["ten_cong_ty", "so_dt_tu_van", "email", "dia_chi", "logo", "ghi_chu"];
}
