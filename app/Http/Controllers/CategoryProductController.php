<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryProductController extends Controller
{
    public function manage()
    {
        $category['table'] = [
            'table_url' => route('category.data'),
            'columns' => [
                [
                    'label' => 'Product',
                    'name' => 'name'
                ],
                [
                    'label' => 'Tanggal Dibuat',
                    'name' => 'created_at'
                ],
                [
                    'label' => 'Action',
                    'name' => 'action'
                ],
            ]
            ];
        return view('admin.product.category.manage', $category);
    }

    public function getData()
    {
        try {
            $category = CategoryProduct::select([
                'id',
                'name',
                'created_at'
            ])
            ->orderBy('created_at', 'asc');

            return DataTables::of($category)

            ->addColumn('created_at', function ($category) {
                    return date('d-m-Y', strtotime($category->created_at));
            })

            ->addColumn('action', function ($category) {
                $string = '<a href="' . route('category.edit', $category->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('category.delete', $category->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'created_at'])
            ->make(true);

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.product.category.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            $createCategory = CategoryProduct::create($input);

            if ($createCategory) {
            return redirect()->route('category.manage')->with('success', 'Berhasil menambahkan kategori baru');
        }
        return redirect()->back()->with('error', 'Gagal menambahkan kategori baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['category'] = CategoryProduct::findOrFail($id);
            return view('admin.product.category.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $category = CategoryProduct::findOrFail($id);

        $inputUpdate = $request->all();

        try {
            $categoryUpdate = $category;
            
            $categoryUpdate = $category->update($inputUpdate);

            if ($categoryUpdate) {
                return redirect()->route('category.manage')->with('success', 'Berhasil mengupdate data kategori');
            }
            return redirect()->back()->with('error', 'Gagal mengupdate data kategori');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $category = CategoryProduct::findOrFail($id);

        try {
            $categoryDelete= $category->delete();

            if ($categoryDelete) {
                return redirect()->route('category.manage')->with('success', 'Berhasil menghapus data kategori');
            }
            return redirect()->back()->with('error', 'Gagal menghapus data kategori');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
