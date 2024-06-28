<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Client;
use App\Models\HomeContent;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $dataAbout = About::first();
        $homeContent = HomeContent::first();
        $dataService = Service::get();
        $dataClient = Client::get();
        $dataProduct = Product::get();
        $dataArticle = Article::orderBy('created_at', 'desc')->get();
        $dataAbout = About::first();
        $slider = Slider::get();
        return view('frontend.home', compact('homeContent', 'dataService', 'dataClient', 'dataProduct', 'dataArticle', 'slider', 'dataAbout'));
    }
}
