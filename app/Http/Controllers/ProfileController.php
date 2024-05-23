<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function manage()
    {
        $profile['table'] = [
            'table_url' => route('profile.data'),
            'columns' => [
                [
                    'label' => 'Judul',
                    'name' => 'title'
                ],
                [
                    'label' => 'Konten',
                    'name' => 'content'
                ],
                [
                    'label' => 'Action',
                    'name' => 'action'
                ]
            ],
        ];

        return view('admin.profile.manage', $profile);
    }

    public function getData()
    {
        try {
            $profile = Profile::select([
            'id',
            'title',
            'content'
        ])
        ->orderBy('created_at', 'asc');

        return DataTables::of($profile)

            ->addColumn('created_at', function ($profile) {
                    return date('d-m-Y', strtotime($profile->created_at));
                })
            
            ->addColumn('content', function ($profile) {
                    return  Str::limit(strip_tags($profile->content), 500, '...');
                })

            ->addColumn('action', function ($profile) {
                $string = '<a href="' . route('profile.edit', $profile->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('profile.delete', $profile->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'content'])
            ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.profile.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {

            $input['slug'] = Str::slug($input['title']);
            
            $createProfile = Profile::create($input);

            if ($createProfile) {
                 return redirect()->route('profile.manage')->with('success', 'Berhasil menambahkan profile perusahaan baru');
            }
            return redirect()->back()->with('error', 'Gagal profile perusahaan baru');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
