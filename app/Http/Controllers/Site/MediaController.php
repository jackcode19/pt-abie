<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function article()
    {
        $dataArticle = Article::get();
        return view('frontend.article.article', compact('dataArticle'));
    }

     public function articleDetail($id)
    {
        $dataArticle = Article::get();
        $articleDetail = Article::findOrfail($id);
        return view('frontend.article.article-detail', compact('articleDetail', 'dataArticle'));
    }

    public function gallery()
    {
        $dataGallery = Gallery::get();
        return view('frontend.gallery.gallery', compact('dataGallery'));
    }

    public function galleryDetail($id)
    {
        
        $galleryDetail = GalleryImage::where('gallery_id', $id)->get();
        return view('frontend.gallery.gallery-detail', compact('galleryDetail'));
    }
}
