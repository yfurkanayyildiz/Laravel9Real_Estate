<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    # many to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
