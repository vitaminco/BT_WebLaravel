<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImg extends Model
{
    use HasFactory;
    protected $fillable = ["path", "id_san_pham"];

    public function san_pham(): BelongsTo
    {
        return $this->belongsTo(SanPham::class, "id_san_pham", "id");
    }
}
