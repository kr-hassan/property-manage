<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];
    use HasFactory;

//    public function featured()
//    {
//        $this->belongsTo(Media::class, 'featured_media_id');
//    }
    public function locations()
    {
        return $this->belongsTo(Location::class,'location_id');

    }
    public function gallery()
    {
       return $this->hasMany(Media::class,'property_id');

    }
}
