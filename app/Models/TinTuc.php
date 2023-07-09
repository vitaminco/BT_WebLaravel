<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TinTuc extends Model
{
    use HasFactory;
    protected $fillable = ["ten_tin_tuc", "giam_gia", "mo_ta", "anh_cover"];
}
