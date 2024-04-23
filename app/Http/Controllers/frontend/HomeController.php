<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $dataAbout = About::first();
        $dataService = Service::get();
        $dataClient = Client::get();
        $dataProduct = Product::get();
        $dataArticle = Article::get();
        $dataSlider = Slider::get();
        return view('frontend.home', compact('dataAbout', 'dataService', 'dataProduct', 'dataClient', 'dataArticle', 'dataSlider'));
    }

    public function about()
    {
        $dataAbout = About::first();
        return view('frontend.about', compact('dataAbout'));
    }

    public function service()
    {
        $dataService = Service::get();
        return view('frontend.service', compact('dataService'));
    }

    public function product()
    {
        $dataProduct = Product::get();
        return view('frontend.product', compact('dataProduct'));
    }

    public function productDetail($id)
    {
        $dataProduct = Product::findOrfail($id);
        return view('frontend.product-detail', compact('dataProduct'));
    }

    public function article()
    {
        $dataArticle = Article::get();
        return view('frontend.article', compact('dataArticle'));
    }

     public function articleDetail($id)
    {
        $dataArticle = Article::get();
        $articleDetail = Article::findOrfail($id);
        return view('frontend.article-detail', compact('articleDetail', 'dataArticle'));
    }

    public function contact()
    {
        $dataContact = Contact::first();
        return view('frontend.contact', compact('dataContact'));
    }
}
