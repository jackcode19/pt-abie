<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Client;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $client = Client::count();
        $service = Service::count();
        $product = Product::count();
        $article = Article::count();
        return view('admin.dashboard', compact('client', 'service', 'product', 'article'));
    }
}
