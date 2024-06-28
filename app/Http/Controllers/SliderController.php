<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function manage()
    {
        $slider['table'] = [
            'table_url' => route('slider.data'),
            'columns' => [
                [
                    'label' => 'Judul',
                    'name' => 'title',
                ],
                [
                    'label' => 'Gambar',
                    'name' => 'slider_image',
                ],
                [
                    'label' => 'Deskripsi',
                    'name' => 'description',
                ],
                [
                    'label' => 'Aksi',
                    'name' => 'action',
                ],
            ],
        ];
        return view('admin.slider.manage', $slider);
    }

    public function getData()
    {
        try {
            $slider = Slider::select([
            'id',
            'title',
            'slider_image',
            'description',
            'created_at'
        ])
        ->orderBy('title', 'desc');

        return DataTables::of($slider)

            ->addColumn('created_at', function ($slider) {
                    return date('d-m-Y', strtotime($slider->created_at));
                })

            ->addColumn('slider_image', function ($slider) {
                    $url = Storage::url('sliders/'. $slider->slider_image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($slider) {
                    $string = '<a href="' . route('slider.edit', $slider->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                    $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                    $string .= '<form action="' . route('slider.delete', $slider->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                    return $string;
                })
                ->rawColumns(['action', 'slider_image'])
                ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.slider.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('slider_image')) {
                $extension = $request->file('slider_image')->extension();
                $imageName = 'slider-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('slider_image')->storeAs('public/sliders', $imageName);
            }

            $input['slider_image'] = $imageName;
            $createSlider = Slider::create($input);

            if ($createSlider) {
                return redirect()->route('slider.manage')->with('success', 'Berhasil menambahkan slider baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan slider baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['slider'] = Slider::findOrFail($id);
            return view('admin.slider.form', $data);
        } catch (\Throwable $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $pathImage = public_path() . '/images/sliders/' . $slider->slider_image;

        if ($request->hasFile('slider_image')) {
            Storage::delete('public/sliders/'. $slider->slider_image);
            $extension = $request->file('slider_image')->extension();
            $imageName = 'slider-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('slider_image')->storeAs('public/sliders', $imageName);
        } elseif($slider->slider_image) {
            $imageName = $slider->slider_image;
        } else {
            $imageName = null;
        }

            $inputUpdate = $request->all();
        try {
            $sliderUpdate = $slider;

            if ($sliderUpdate->slider_image) {
                $inputUpdate['slider_image'] = $imageName;
            }

            $sliderUpdate = $slider->update($inputUpdate);

            if ($sliderUpdate) {
                return redirect()->route('slider.manage')->with('success', 'Berhasil mengubah data slider');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data slider');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);

        try {
            Storage::delete('public/sliders/', $slider->slider_image);

            $sliderDelete = $slider->delete();

            if ($sliderDelete) {
                return redirect()->route('slider.manage')->with('success', 'Berhasil menghapus data slider');
            }
            return back()->with('error', 'Gagal menghapus data slider');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
        
    }
}
