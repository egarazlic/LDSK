<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $appends= [
        'agencyUsers',
        'agencyAds',
        'agencyProperties'
    ];
    public function agencyUsersAttribute()
    {
        return $this->hasMany(User::class);
    }
    public function agencyAdsAttribute()
    {
        $propertiesIds=$this->agencyProperties->pluck('id');
        return Ads::whereIn("id",$propertiesIds)->get();
    }
    public function agencyPropertiesAttribute()
    {

        return $this->hasMany(Property::class);
    }
}
