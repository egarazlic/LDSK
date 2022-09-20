<?php

namespace App\Repositories;

use App\Models\Agency;
use App\Models\User;
use App\Models\Property;
class PropertyRepository
{
    public static function getPropertiesByUser(User $user)
    {
        return Property::where('user_id',$user->id)->get();
    }
    public static function getMonthlyStatisticsProperties($month)
    {
        /**
         **/
        return Property::where('sold_date_month',$month)->get();
    }
}
