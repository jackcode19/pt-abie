<?php

namespace App\Http\Controllers;

use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class CategoryArticleController extends Controller
{
    public function manage()
    {
         $category['table'] = [
                'table_url' => '/category/data',
                'columns' => [
                    [
                        'label' => 'Nama Kategori',
                        'name' => 'name',
                    ],
                    [
                        'label' => 'Action',
                        'name' => 'action'
                    ],
                    
                ],
            ];
        return view('admin.article.category.manage', $category);
    }

    public function getData()
    {
        try {
            $category = CategoryArticle::select([
                'id',
                'name',
            ])
            ->orderBy('created_at', 'asc');

            return DataTables::of($category)

            ->addColumn('created_at', function ($category) {
                    return date('d-m-Y', strtotime($category->created_at));
            })

            ->addColumn('action', function ($category) {
                $string = '<a href="' . route('category-article.edit', $category->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('category-article.delete', $category->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action'])
            ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.article.category.form');
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();

            $createCategory = CategoryArticle::create($input);

            if ($createCategory) {
                return redirect()->route('category-article.manage')->with('success', 'Berhasil menambahkan kategori baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan kategori baru');
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $data['category'] = CategoryArticle::findOrFail($id);
            return view('admin.article.category.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $category = CategoryArticle::findOrFail($id);

        $inputUpdate = $request->all();

        try {
            
            $categoryUpdate = $category->update($inputUpdate);

            if($categoryUpdate)
            {
                return redirect()->route('category-article.manage')->with('success', 'berhasil mengubah data kategori');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data kategori');

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function delete($id)
    {
        $category = CategoryArticle::findOrFail($id);
        
        $categoryDelete = $category->delete();

        if($categoryDelete)
        {
            return redirect()->route('category-article.manage')->with('success', 'Berhasil menghapus data kategori');
        }
        return redirect()->back()->with('error', 'Gagal menghapus data kategori');
    }
}
