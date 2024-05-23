<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutme()
    {
        $dataAbout = About::first()->aboutme;
        $slider = Slider::get();
        return view('frontend.about.aboutme', compact('dataAbout', 'slider'));
    }

    public function visiMisi()
    {
        $dataAbout = About::first()->visi_misi;
        $slider = Slider::get();
        return view('frontend.about.visi-misi', compact('dataAbout', 'slider'));
    }

    public function ourValue()
    {
        $dataAbout = About::first()->value;
        $slider = Slider::get();
        return view('frontend.about.value', compact('dataAbout', 'slider'));
    }
}
