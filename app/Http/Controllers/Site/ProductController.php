<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductController extends Controller
{
    public function product()
    {
        try{
            $dataProduct = Product::get();
            $banner = Banner::where('page', 'product')->first();
            return view('frontend.product.product', compact('dataProduct', 'banner'));
        }catch(Exception $error) { 
            return $error->getMessage();
        }
    }

    public function productDetail($id)
    {
        $dataProduct = Product::findOrfail($id);
        $dataService = Service::get();
        return view('frontend.product.product-detail', compact('dataProduct', 'dataService'));
    }
}
