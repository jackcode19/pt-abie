<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function manage()
    {
        $career['table'] = [
            'table_url' => '/career/data',
            'columns' => [
                [
                    'label' =>  'Judul',
                    'name' => 'title'
                ],
                [
                    'label' =>  'Gambar',
                    'name' => 'image'
                ],
                [
                    'label' =>  'Konten',
                    'name' => 'content'
                ],
                [
                    'label' =>  'Action',
                    'name' => 'action'
                ],
            ]
        ];

        return view('admin.career.manage', $career);
    }

    public function getData()
    {
        try {
            $career = Career::select([
                'id',
                'title',
                'image',
                'content',
            ])
            ->orderBy('created_at', 'desc');

            return DataTables::of($career)

            ->addColumn('created_at', function ($career) {
                    return date('d-m-Y', strtotime($career->created_at));
                })
            
            ->addColumn('content', function ($career) {
                    return  Str::limit(strip_tags($career->content), 500, '...');
                })

            ->addColumn('image', function ($career) {
                    $url = Storage::url('articles/'. $career->image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })


            ->addColumn('action', function ($career) {
                $string = '<a href="' . route('career.edit', $career->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('career.delete', $career->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

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
        return view('admin.career.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $imageName = 'career-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('image')->storeAs('public/careers', $imageName);
            }
            
            $input['image'] = $imageName;
            $createCareer = Career::create($input);

            if ($createCareer) {
                return redirect()->route('career.manage')->with('success', 'Berhasil menambahkan data career baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan data career baru');

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $data['career'] = Career::findOrFail($id);
            return view('admin.career.form', $data);
        } catch (\Throwable $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/careers'. $career->image);
            $extension = $request->file('image')->extension();
            $imageName = 'career-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('image')->storeAs('public/careers', $imageName);
        }
        elseif ($career->image) {
            $imageName = $career->image;
        }
        else {
            $imageName = null;
        }

        $inputUpdate = $request->all();

        try {
            $careerUpdate = $career;

            if ($careerUpdate->image) {
                $inputUpdate['image'] = $imageName;
            }

            $careerUpdate = $career->update($inputUpdate);

            if ($careerUpdate) {
                return redirect()->route('career.manage')->with('success', 'Berhasil mengubah data career');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data career');

        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $career = Career::findOrFail($id);

        try {
            Storage::delete('public/careers'. $career->image);

            $careerDelete = $career->delete();

            if ($careerDelete) {
                return redirect()->route('career.manage')->with('success', 'Berhasil menghapus data career');
            }
            return redirect()->back()->with('error', 'Gagal menghapus data career');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
