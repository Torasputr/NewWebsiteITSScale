<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
}
