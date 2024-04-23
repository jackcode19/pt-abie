<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function manage()
    {
        $article['table'] = [
            'table_url' => route('article.data'),
            'columns' => [
                [
                    'label' => 'Judul Artikel',
                    'name' => 'title',
                ],
                [
                    'label' => 'Thumbnail',
                    'name' => 'image',
                ],
                [
                    'label' => 'Artikel',
                    'name' => 'content'
                ],
                [
                    'label' => 'Aksi',
                    'name' => 'action'
                ]
                ],
        ];

        return view('admin.article.manage', $article);
    }

    public function getData()
    {
        try {
            $article = Article::select([
                'id',
                'title',
                'image',
                'content',
            ])
            ->orderBy('title', 'asc');

            return DataTables::of($article)

            ->addColumn('created_at', function ($article) {
                    return date('d-m-Y', strtotime($article->created_at));
                })
            
            ->addColumn('content', function ($article) {
                    return  Str::limit(strip_tags($article->content), 500, '...');
                })

            ->addColumn('image', function ($article) {
                    $url = asset('/images/articles/' . $article->image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($article) {
                $string = '<a href="' . route('article.edit', $article->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('article.delete', $article->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        $dataCategory['categoryList'] = CategoryArticle::get();
        return view('admin.article.form', $dataCategory);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('image')) {
                $imageFile = $request->image;
                $articleImage = $input['title'] . '.' . $imageFile->extension();
                $imageFile->move(public_path() . '/images/articles/', $articleImage);
            }

            $input['image'] = $articleImage;
            
            $createArtikel = Article::create($input);

            if ($createArtikel) {
                 return redirect()->route('article.manage')->with('success', 'Berhasil menambahkan artikel baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan artikel baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['article'] = Article::findOrFail($id);
            $dataCategory['categoryList'] = CategoryArticle::get();
            return view('admin.article.form', $data, $dataCategory);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $pathImage = public_path() . '/images/articles/' . $article->image;

        if ($request->hasFile('image')) {
            File::delete($pathImage);
            $imageFile = $request->image;
            $articleImage = $article['title'] . '.' . $imageFile->extension();
            $imageFile->move(public_path(). '/images/articles/', $articleImage);
        } elseif($article->image) {
            $articleImage = $article->image;
        } else {
            $articleImage = null;
        }

        $inputUpdate = $request->all();

        try {
            $updateArticle = $article;

            if ($updateArticle->image) {
                $inputUpdate['image'] = $articleImage;
            }

            $updateArticle = $article->update($inputUpdate);

            if ($updateArticle) {
                return redirect()->route('article.manage')->with('success', 'Berhasil mengubah artikel');
            }
            return redirect()->back()->with('error', 'Gagal mengubah artikel');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);

        try {
            $pathImage = public_path() . '/images/articles/' . $article->image;
            File::delete($pathImage);
            
            $articleDelete = $article->delete();

            if ($articleDelete) {
                return redirect()->route('article.manage')->with('success', 'Berhasil menghapus artikel');
            }
            return redirect()->back()->with('error', 'Gagal menghapus artikel');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
