<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryArticleController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Site\AboutController as SiteAboutController;
use App\Http\Controllers\Site\ContactController as SiteContactController;
use App\Http\Controllers\Site\HomeController as SiteHomeController;
use App\Http\Controllers\Site\MediaController;
use App\Http\Controllers\site\ProductController as SiteProductController;
use App\Http\Controllers\site\ServiceController as SiteServiceController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Frontend
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', [SiteHomeController::class, 'home'])->name('home');
Route::get('/about/tentang-kami', [SiteAboutController::class, 'aboutme'])->name('about');
Route::get('/about/visi-misi', [SiteAboutController::class, 'visiMisi'])->name('visi-misi');
Route::get('/about/nilai-nilai', [SiteAboutController::class, 'ourValue'])->name('value');
Route::get('/about/aktivitas-kami', [SiteAboutController::class, 'activity'])->name('activity');

Route::get('/service', [SiteServiceController::class, 'service'])->name('service');
Route::get('/product', [SiteProductController::class, 'product'])->name('product');

Route::get('/product/{id}/detail', [SiteProductController::class, 'productDetail'])->name('productDetail');
Route::get('/article', [MediaController::class, 'article'])->name('article');
Route::get('/article/{id}/detail', [MediaController::class, 'articleDetail'])->name('articleDetail');
Route::get('/contact', [SiteContactController::class, 'contact'])->name('contact');
Route::get('/gallery', [MediaController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{id}/detail', [MediaController::class, 'galleryDetail'])->name('galleryDetail');


Route::group(['middleware' => ['auth:web']], function () {

    Route::get('logout',  [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('about/manage', [AboutController::class, 'manage'])->name('about.manage');
    Route::put('about/update/{id}', [AboutController::class, 'update'])->name('about.update');

    Route::get('/home/content', [HomeContentController::class, 'index'])->name('home.index');
    Route::get('/home/create', [HomeContentController::class, 'create'])->name('home.create');
    Route::post('/home', [HomeContentController::class, 'store'])->name('home.store');
    Route::get('/home/{homeContent}/edit', [HomeContentController::class, 'edit'])->name('home.edit');
    Route::put('/home/{homeContent}', [HomeContentController::class, 'update'])->name('home.update');
    Route::delete('/home/{homeContent}', [HomeContentController::class, 'destroy'])->name('home.destroy');


    Route::group(['prefix' => 'service', 'as' => 'service.'], function() {
        Route::get('/manage', [ServiceController::class, 'manage'])->name('manage');
        Route::get('/data', [ServiceController::class, 'getData'])->name('data');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
        Route::get('/manage', [ClientController::class, 'manage'])->name('manage');
        Route::get('/data', [ClientController::class, 'getData'])->name('data');
        Route::get('/create', [ClientController::class, 'create'])->name('create');
        Route::post('/store', [ClientController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ClientController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ClientController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'category', 'as' => 'category.'], function() {
        Route::get('/manage', [CategoryProductController::class, 'manage'])->name('manage');
        Route::get('/data', [CategoryProductController::class, 'getData'])->name('data');
        Route::get('/create', [CategoryProductController::class, 'create'])->name('create');
        Route::post('/store', [CategoryProductController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryProductController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryProductController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryProductController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'product', 'as' => 'product.'], function() {
        Route::get('/manage', [ProductController::class, 'manage'])->name('manage');
        Route::get('/data', [ProductController::class, 'getData'])->name('data');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function() {
        Route::get('/manage', [ContactController::class, 'manage'])->name('manage');
        Route::put('/update/{id}', [ContactController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function() {
        Route::get('/manage', [SliderController::class, 'manage'])->name('manage');
        Route::get('/data', [SliderController::class, 'getData'])->name('data');
        Route::get('/create', [SliderController::class, 'create'])->name('create');
        Route::post('/store', [SliderController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [SliderController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'category-article', 'as' => 'category-article.'], function() {
        Route::get('/manage', [CategoryArticleController::class, 'manage'])->name('manage');
        Route::get('/data', [CategoryArticleController::class, 'getData'])->name('data');
        Route::get('create', [CategoryArticleController::class, 'create'])->name('create');
        Route::post('/store', [CategoryArticleController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryArticleController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryArticleController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryArticleController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'article', 'as' => 'article.'], function() {
        Route::get('/manage', [ArticleController::class, 'manage'])->name('manage');
        Route::get('/data', [ArticleController::class, 'getData'])->name('data');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/store', [ArticleController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ArticleController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ArticleController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function() {
        Route::get('/manage', [GalleryController::class, 'manage'])->name('manage');
        Route::get('/data', [GalleryController::class, 'getData'])->name('data');
        Route::get('{id}/dataImage', [GalleryController::class, 'getDataImageById'])->name('dataGalleryImage');
        Route::get('gallery_image/edit/{id}', [GalleryController::class, 'getEditGalleryImage'])->name('editGalleryImage');
        Route::put('gallery_image/update/{id}', [GalleryController::class, 'updateGalleryImage'])->name('updateGalleryImage');
        Route::delete('gallery_image/delete/{id}', [GalleryController::class, 'deleteGalleryImage'])->name('deleteGalleryImage');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::post('/store', [GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [GalleryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function() {
        Route::get('/manage', [BannerController::class, 'manage'])->name('manage');
        Route::get('/data', [BannerController::class, 'getData'])->name('data');
        Route::get('/create', [BannerController::class, 'create'])->name('create');
        Route::post('/store', [BannerController::class, 'store'])->name('store');
        Route::get('/update/{id}', [BannerController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [BannerController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BannerController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'career', 'as' => 'career.'], function() {
        Route::get('/manage', [CareerController::class, 'manage'])->name('manage');
        Route::get('/data', [CareerController::class, 'getData'])->name('data');
        Route::get('/create', [CareerController::class, 'create'])->name('create');
        Route::post('/store', [CareerController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CareerController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CareerController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CareerController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'testimonial', 'as' => 'testimonial.'], function() {
        Route::get('/manage', [TestimonialController::class, 'manage'])->name('manage');
        Route::get('/data', [TestimonialController::class, 'getData'])->name('data');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [TestimonialController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete');
    });

    // Pending Fifur
    Route::group(['prefix' => 'team', 'as' => 'team.'], function() {
        Route::get('/manage', [TeamController::class, 'manage'])->name('manage');
        Route::get('/data', [TeamController::class, 'getData'])->name('data');
        Route::get('/create', [TeamController::class, 'create'])->name('create');
        Route::post('/store', [TeamController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [TeamController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TeamController::class, 'delete'])->name('delete');
    });

});

Auth::routes([
    'register' => false,
    'login' => true,
]);
Route::get('/register', function() {
    return redirect('/login');
});

