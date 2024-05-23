<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function service()
    {
        $dataService = Service::get();
        return view('frontend.service.service', compact('dataService'));
    }

    public function product()
    {
        $dataProduct = Product::get();
        return view('frontend.product.product', compact('dataProduct'));
    }

    public function productDetail($id)
    {
        $dataProduct = Product::findOrfail($id);
        $dataService = Service::get();
        return view('frontend.product.product-detail', compact('dataProduct', 'dataService'));
    }

}
