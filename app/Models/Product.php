<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "code",
        "preview_image",
        "preview_text",
        "detail_text",
        "detail_image",
        "is_published",
        "price"
    ];
}
