<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\CategoryArticle;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function article()
    {
        // $dataArticle = Article::get();
        $banner = Banner::where('page', 'article')->first();
        $categories = CategoryArticle::all();
        $pagination = 9;

        if (request()->category) {
            $dataArticle = Article::where('category_id', [request()->category])->orderBy('created_at', 'desc')->get();

             $categoryName = $categories->where('id', request()->category)->first()->name;
        }
        else {
            $dataArticle = Article::where('status', 'PUBLISH')->orderBy('created_at', 'desc')->get();
            $categoryName = 'Terbaru';
        }


        return view('frontend.article.article', compact('dataArticle', 'banner', 'categories', 'categoryName'));
    }

     public function articleDetail($id)
    {
        $dataArticle = Article::orderBy('created_at', 'desc')->get();
        $articleDetail = Article::where('id', $id)->first();

        $categories = CategoryArticle::all();

        return view('frontend.article.article-detail', compact('articleDetail', 'dataArticle', 'categories'));
    }

    public function gallery()
    {
        $dataGallery = Gallery::get();
        $banner = Banner::where('page', 'media')->first();
        return view('frontend.gallery.gallery', compact('dataGallery', 'banner'));
    }

    public function galleryDetail($id)
    {

        $galleryDetail = GalleryImage::where('gallery_id', $id)->get();
        $galleryName = Gallery::where('gallery_id', $id)->first();

        return view('frontend.gallery.gallery-detail', compact('galleryDetail', 'galleryName'));
    }
}
