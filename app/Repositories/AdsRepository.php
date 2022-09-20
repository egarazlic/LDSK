<?php

namespace App\Repositories;

use App\Models\Ads;
use App\Models\Agency;
use App\Models\User;
use App\Models\Property;

class AdsRepository
{
    public static function getAdsViews(Ads $ads)
    {
        return Property::where('user_id',$ads->id)->get();
    }
    public static function getStatisticsAds()
    {
        /**
         *
         **/
        return Ads::where('views','>',0)->get();
    }
}
