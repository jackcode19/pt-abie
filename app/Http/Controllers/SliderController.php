<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        ->orderBy('title', 'asc');

        return DataTables::of($slider)

            ->addColumn('created_at', function ($slider) {
                    return date('d-m-Y', strtotime($slider->created_at));
                })

            ->addColumn('slider_image', function ($slider) {
                    $url = asset('/images/sliders/' . $slider->slider_image);
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
                $imageFile = $request->slider_image;
                $sliderImage = $input['title'] . '.' . $imageFile->extension();
                $imageFile->move(public_path(). '/images/sliders/', $sliderImage);
            }

            $input['slider_image'] = $sliderImage;
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
            File::delete($pathImage);
            $imageFile = $request->slider_image;
            $sliderImage = $slider['title'] . '.' . $imageFile->extension();
            $imageFile->move(public_path(). '/images/sliders/', $sliderImage);
        } elseif($slider->slider_image) {
            $sliderImage = $slider->slider_image;
        } else {
            $sliderImage = null;
        }

            $inputUpdate = $request->all();
        try {
            $sliderUpdate = $slider;

            if ($sliderUpdate->slider_image) {
                $inputUpdate['slider_image'] = $sliderImage;
            }

            $sliderUpdate = $slider->update($inputUpdate);

            if ($sliderUpdate) {
                return redirect()->route('slider.manage')->with('success', 'Berhasil mengupdate data slider');
            }
            return redirect()->back()->with('error', 'Gagal mengupdate data slider');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);

        try {
            $pathImage = public_path() . '/images/sliders/' . $slider->slider_image;
            File::delete($pathImage);

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
