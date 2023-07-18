<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\Sanctum;

class DongGop extends Model
{
    use HasFactory;
    protected $fillable = ["id_users", "id_san_phams", "mo_ta", "anh_comments", "ghi_chu"];
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, "id_users", "id");
    }
    public function san_phams(): BelongsTo
    {
        return $this->belongsTo(SanPham::class, "id_san_phams", "id");
    }
}
