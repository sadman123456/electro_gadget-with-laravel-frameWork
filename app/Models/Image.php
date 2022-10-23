<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    // protected $fillable  = ['imageable_type','imageable_id','upload_by','image'];

    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'upload_by');
    }
    
    public function imageable()
    {
        return $this->morphTo();
    }
}

