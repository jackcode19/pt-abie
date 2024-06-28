<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function manage()
    {
        $product['table'] = [
            'table_url' => route('product.data'),
            'columns' => [
                [
                    'label' => 'Produk',
                    'name' => 'product_name'
                ],
                [
                    'label' => 'Gambar',
                    'name' => 'product_image'
                ],
                // [
                //     'label' => 'Kategori',
                //     'name' => 'category_name'
                // ],
                [
                    'label' => 'Deskripsi',
                    'name' => 'description'
                ],
                [
                    'label' => 'Action',
                    'name' => 'action'
                ],
            ],
        ];
        return view('admin.product.manage', $product);
    }

    public function getData()
    {
        try {
            $product = Product::select([
                'products.id',
                'product_name',
                'product_image',
                'products.description',
                'products.created_at',
                'products.updated_at',
                // 'category.name as category_name'
            ])
            // ->join('category_products', 'category_products.id', '=', 'products.category_id')
            // ->leftJoin('category_products as category', 'category.id', 'products.category_id')
            ->orderBy('product_name', 'desc');

            return DataTables::of($product)

            ->addColumn('created_at', function ($product) {
                    return date('d-m-Y', strtotime($product->created_at));
                })

            ->addColumn('updated_at', function ($product) {
                    return date('d-m-Y H:i:s', strtotime($product->updated_at));
                })

            ->addColumn('description', function ($product) {
                    return  Str::limit($product->description, 50, '...');
                })

            ->addColumn('product_image', function ($product) {
                    // $url = asset('/storage/products/' . $product->product_image);
                    $url = Storage::url('products/'. $product->product_image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($product) {
                $string = '<a href="' . route('product.edit', $product->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('product.delete', $product->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'product_image', 'description'])
            ->make(true);
            
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        $category['categoryList'] = CategoryProduct::query()->orderBy('name')->get();
        return view('admin.product.form', $category);
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('product_image')) {
            $extension = $request->file('product_image')->extension();
            $imageName = 'product-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('product_image')->storeAs('public/products', $imageName);
            }

            $input['product_image'] = $imageName;
            $createProduct = Product::create($input);

            if ($createProduct) {
                return redirect()->route('product.manage')->with('success', 'Berhasil menambahkan produk baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan produk baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
            // return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $data['product'] = Product::findOrFail($id);
            $data['categoryList'] = CategoryProduct::query()->orderBy('name')->get();
            return view('admin.product.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        
        if ($request->hasFile('product_image')) {
            Storage::delete('public/products/'. $product->product_image);
            $extension = $request->file('product_image')->extension();
            $imageName = 'product-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('product_image')->storeAs('public/products', $imageName);
        } elseif($product->product_image) {
            $imageName = $product->product_image;
        } else {
            $imageName = null;
        }

        $inputUpdate = $request->all();

        try {
            $productUpdate = $product;

            if ($productUpdate->product_image) {
                $inputUpdate['product_image'] = $imageName;
            }

            $productUpdate = $product->update($inputUpdate);

            if ($productUpdate) {
                return redirect()->route('product.manage')->with('success', 'Berhasil Mengubah data product');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data product');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        try {
            $pathImageProduct = public_path() . '/images/products/' . $product->product_image;
            File::delete($pathImageProduct);

            $deleteProduct = $product->delete();

            if ($deleteProduct) {
                return redirect()->route('product.manage')->with('success', 'Berhasil mengubah data product');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data product');

        } catch (\Exception $error) {
        return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
