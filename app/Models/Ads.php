<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $with = [
        "adsProperty",
    ];
    public function adsProperty()
    {
        return $this->belongsTo(Property::class);
    }

}
