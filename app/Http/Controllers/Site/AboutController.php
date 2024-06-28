<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutme()
    {
        $dataAbout = About::first();
        $banner = Banner::where('page', 'aboutme')->first();
        return view('frontend.about.aboutme', compact('dataAbout', 'banner'));
    }

    public function visiMisi()
    {
        $dataAbout = About::first()->visi_misi;
        $banner = Banner::where('page', 'aboutme')->first();
        return view('frontend.about.visi-misi', compact('dataAbout', 'banner'));
    }

    public function ourValue()
    {
        $dataAbout = About::first()->value;
        $slider = Slider::get();
        return view('frontend.about.value', compact('dataAbout', 'slider'));
    }

    public function activity()
    {
        $dataAbout = About::first()->ouractivity;
        $banner = Banner::where('page', 'aboutme')->first();
        return view('frontend.about.activity', compact('dataAbout', 'banner'));
    }
}
