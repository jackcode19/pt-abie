<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function manage()
    {
        $banner['table'] = [
            'table_url' => route('banner.data'),
            'columns' => [
                [
                    'label' => 'Title',
                    'name' => 'title'
                ],
                [
                    'label' => 'Image',
                    'name' => 'image'
                ],
                [
                    'label' => 'Page',
                    'name' => 'page',
                ],
                [
                    'label' => 'Status',
                    'name' => 'status',
                ],
                [
                    'label' => 'Action',
                    'name' => 'action'
                ]
            ],
        ];

        return view('admin.banner.manage', $banner);
    }

    public function getData()
    {
        try {
            $banner = Banner::select([
                'id',
                'title',
                'image',
                'page',
                'status',
            ])
            ->orderBy('title', 'asc');

            return DataTables::of($banner)

            ->addColumn('created_at', function ($banner) {
                    return date('d-m-Y', strtotime($banner->created_at));
                })

            ->addColumn('image', function ($banner) {
                    $url = Storage::url('banners/'. $banner->image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($banner) {
                    $string = '<a href="' . route('banner.edit', $banner->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                    $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                    $string .= '<form action="' . route('banner.delete', $banner->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

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
        return view('admin.banner.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $imageName = 'banner-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('image')->storeAs('public/banners', $imageName);
            }

            $input['image'] = $imageName;
            $createBanner = Banner::create($input);

            if ($createBanner) {
                return redirect()->route('banner.manage')->with('success', 'Berhasil menambahkan banner baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan banner baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['banner'] = Banner::findOrFail($id);
            return view('admin.banner.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/banners/'. $banner->slider_image);
            $extension = $request->file('image')->extension();
            $imageName = 'banner-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('image')->storeAs('public/banners', $imageName);
        }
        elseif ($banner->image) {
            $imageName = $banner->image;
        }
        else {
            $imageName = null;
        }

        $inputUpdate = $request->all();

        try {
            $bannerUpdate = $banner;

            if($bannerUpdate->image)
            {
                $inputUpdate['image'] = $imageName;
            }

            $bannerUpdate = $banner->update($inputUpdate);

            if ($bannerUpdate) {
                return redirect()->route('banner.manage')->with('success', 'Banner berhasil diupdate');
            }
            return redirect()->back()->with('error', 'Banner Gagal diubah');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $banner = Banner::findOrFail($id);

        try {
            Storage::delete('public/banners/'. $banner->image);
            
            $bannerDelete = $banner->delete();

            if ($bannerDelete) {
                return redirect()->route('banner.manage')->with('success', 'Berhasil menghapus banner');
            }
            return redirect()->back()->with('error', 'Gagal menghapus banner');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
