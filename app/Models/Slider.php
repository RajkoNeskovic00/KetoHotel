<?php

namespace App\Models;

class Slider
{
    public function getSlider()
    {
        return \DB::table('slider')
            ->where('currently_active', true)
            ->get();
    }
}
