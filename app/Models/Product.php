<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function formatted_amount()
    {
        return "RS" . " " . $this->price / 10;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}