<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $appends = [
        "is_sold",
        "sold_date_month"
    ];

    protected $with = [
        "propertyAgency",
        "propertyUser",
        "propertyCity",
        "propertyCountry"
    ];
    public function propertyAgency()
    {
        return $this->belongsTo(Agency::class);
    }
    public function propertyUser()
    {
        return $this->belongsTo(User::class);
    }
    public function propertyCity()
    {
        return $this->belongsTo(City::class);
    }
    public function propertyCountry()
    {
        return $this->belongsTo(Country::class);
    }
    public function isSold()
    {
        return $this->sold;
    }
    public function soldDateMonth()
    {
        return $this->sold_date->format("m");
    }
}
