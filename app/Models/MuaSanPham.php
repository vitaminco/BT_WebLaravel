<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MuaSanPham extends Model
{
    use HasFactory;
    protected $fillable = ["name", "dia_chi", "so_dt", "id_san_pham", "gia", "mo_ta"];
    //cấu hình liên kết khóa ngoại(left- jone)
    public function san_phams(): BelongsTo
    {
        return $this->belongsTo(SanPham::class, "id_san_pham", "id");
    }
}
