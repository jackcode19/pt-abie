<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function showAbout()
    {
        try {
            $about = About::get();

            return response()->json([
                'status' => 'success',
                'message' => 'Show Data About',
                'data' => $about,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function showService()
    {
        

        try {
            $service = Service::get();

            

            return response()->json([
                'status' => 'success',
                'message' => 'Show Data Service',
                'data' => $service,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function detailService($id)
    {
        try {
            $service = Service::findOrFail($id);

            return response()->json([
                'status' => 'success',
                'message' => 'Show Detail Service',
                'data' => $service,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function showClient()
    {
        try {
            $client = Client::get();

            return response()->json([
                'status' => 'success',
                'message' => 'Show Data Client',
                'data' => $client,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function detailClient($id)
    {
        try {
            $clientDetail = Client::findOrFail($id);

            return response()->json([
                 'status' => 'success',
                'message' => 'Show Detail Client',
                'data' => $clientDetail,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function showProduct()
    {
        try {
            $product = Product::get();
            return response()->json([
                'status' => 'success',
                'message' => 'Show Data Product',
                'data' => $product,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }

    public function detailProduct($id)
    {
        try {
            $detailProduct = Product::findOrFail($id);
            response()->json([
                'status' => 'success',
                'message' => 'Show Detail Product',
                'data' => $detailProduct,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }

    public function showContact()
    {
        
        try {
            $contactInformation = Contact::get();

            return response()->json([
                'status' => 'success',
                'message' => 'Show Data Contact',
                'data' => $contactInformation,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }

    public function showArticle()
    {
        try {
            $article = Article::get();

            return response()->json([
                'status' => 'success',
                'message' => 'Show Data Article',
                'data' => $article,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => $error->getMessage(),
            ]);
        }
    }

    public function detailArticle($id)
    {
        try {
            $detailArticle = Article::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Show Detail Article',
                'data' => $detailArticle,
            ]);
        } catch (\Exception $erorr) {
            return response()->json([
                'status' => 'erorr',
                'message' => $erorr->getMessage(),
            ]);
        }
    }
}
