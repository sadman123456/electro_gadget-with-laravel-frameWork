<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['name','brand_id','sale_price','purchase_price','description','category_id','quantity','image','is_active'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

}

