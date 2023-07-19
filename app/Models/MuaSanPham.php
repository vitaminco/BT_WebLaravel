<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\Sanctum;

class MuaSanPham extends Model
{
    use HasFactory;
    protected $fillable = ["ten", "dia_chi", "so_dt", "id_san_pham", "id_users", "gia", "mo_ta", "so_luong"];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, "id_users", "id");
    }
    public function san_phams(): BelongsTo
    {
        return $this->belongsTo(SanPham::class, "id_san_pham", "id");
    }
}
