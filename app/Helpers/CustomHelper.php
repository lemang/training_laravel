<?php

namespace App\Helpers;

use App\Models\GeneralLookup;

class CustomHelper
{
    public static function lookupGeneral($category)
    {
        return GeneralLookup::where(['category' => $category])
            ->get()
            ->pluck('name', 'code');
    }
}
