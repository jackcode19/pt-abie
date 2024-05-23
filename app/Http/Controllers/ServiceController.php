<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function manage()
    {
        $service['table'] = [
            'table_url' => route('service.data'),
            'columns' => [
                [
                    'label' => 'Judul Service',
                    'name' => 'title'
                ],
                [
                    'label' => 'logo',
                    'name' => 'service_logo'
                ],
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
        return view('admin.service.manage', $service);
    }

    public function getData()
    {
        try {
            $service = Service::select([
                'id',
                'title',
                'service_logo',
                'description',
                'created_at'
            ])
            ->orderBy('created_at');
            return DataTables::of($service)

            ->addColumn('created_at', function ($service) {
                    return date('d-m-Y', strtotime($service->created_at));
                })

            ->addColumn('service_logo', function ($service) {
                    $url = Storage::url('public/services/'. $service->service_logo);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($service) {
                    $string = '<a href="' . route('service.edit', $service->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                    $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                    $string .= '<form action="' . route('service.delete', $service->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                    return $string;
                })
                ->rawColumns(['action', 'service_logo'])
                ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.service.form');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'logo_service' => 'required',
        //     'description' => 'required',
        // ]);

        $input = $request->all();

        try {
            if ($request->hasFile('service_logo')) {
                $extension = $request->file('service_logo')->extension();
                $imageName = 'service-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('service_logo')->storeAs('public/services', $imageName);
            }

            $input['service_logo'] = $imageName;
            $createService = Service::create($input);

            if ($createService) {
                return redirect()->route('service.manage')->with('success', 'Berhasil menambahkan service baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan service baru');

        } catch (\Exception $error) {
            // return redirect()->back()->with('error', $error->getMessage());
            return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $data['service'] = Service::findOrfail($id);
            return view('admin.service.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with($error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        if ($request->hasFile('service_logo')) {
            Storage::delete('public/services/'. $service->service_logo);
            $extension = $request->file('service_logo')->extension();
            $imageName = 'service-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('service_logo')->storeAs('public/services', $imageName);
        } elseif($service->service_logo) {
            $imageName = $service->service_logo;
        } else {
            $imageName = null;
        }

        $inputUpdate = $request->all();

        // dd($inputUpdate);

        try {
            $serviceUpdate = $service;

            if ($serviceUpdate->service_logo) {
                $inputUpdate['service_logo'] = $imageName;
            }

            $serviceUpdate->update($inputUpdate);

            if ($serviceUpdate) {
                return redirect()->route('service.manage')->with('success', 'Berhasil mengupdate service');
            }
            return redirect()->back()->with('error', 'Gagal mengupdate servie');
        } catch (\Exception $error) {
             return $error->getMessage();
        }
    }

    public function delete($id)
    {
        $service = Service::findOrfail($id);

        try {
            Storage::delete('public/services/'. $service->service_logo);

            $serviceDelete = $service->delete();

            if ($serviceDelete) {
                return redirect()->route('service.manage')->with('success', 'Berhasil menghapus data service');
            }
            return redirect()->back()->with('error', 'Gagal menghapus data service');
        } catch (\Exception $error) {
             return $error->getMessage();
        }
    }
}
