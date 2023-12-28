<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /////get allSlider at homepage
    public function AllSlider()
    {
        $result = HomeSlider::all(); ///select all
        return $result;
    }
}
