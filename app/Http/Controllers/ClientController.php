<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    public function manage()
    {
        $client['table'] = [
            'table_url' => route('client.data'),
            'columns' => [
                [
                    'label' => 'Nama Klien',
                    'name' => 'title'
                ],
                [
                    'label' => 'Image',
                    'name' => 'client_image'
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
        return view('admin.client.manage', $client);
    }

    public function getData()
    {
        try {
            $client = Client::select([
                'id',
                'title',
                'client_image',
                'description',
                'created_at',
            ])
            ->orderBy('created_at', 'asc');
            return DataTables::of($client)

            ->addColumn('created_at', function ($client) {
                    return date('d-m-Y', strtotime($client->created_at));
                })

            ->addColumn('client_image', function ($client) {
                    $url = asset('/images/clients/' . $client->client_image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($client) {
                $string = '<a href="' . route('client.edit', $client->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('client.delete', $client->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'client_image'])
            ->make(true);

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.client.form');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            if ($request->hasFile('client_image')) {
                $imageFile = $request->client_image;
                $clientImage = $input['title'] . '.' . $imageFile->extension();
                $imageFile->move(public_path(). '/images/clients/', $clientImage);
            }

            $input['client_image'] = $clientImage;
            $createClient = Client::create($input);

            if ($createClient) {
                return redirect()->route('client.manage')->with('success', 'Berhasil menambahkan klien baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan klien baru');

        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $data['client'] = Client::findOrFail($id);
            return view('admin.client.form', $data);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request  $request, $id)
    {
        $client = Client::findOrFail($id);
        $pathLogo = public_path() . '/images/clients/' . $client->client_image;

        if ($request->hasFile('client_image')) {
            File::delete($pathLogo);
            $imageFile = $request->client_image;
            $clientImage = $client['title'] . '.' . $imageFile->extension();
            $imageFile->move(public_path(). '/images/clients/', $clientImage);
        } elseif($client->client_image) {
            $clientImage = $client->client_image;
        } else {
            $clientImage = null;
        }

        $inputUpdate = $request->all();

        try {
            $clientUpdate = $client;

            if ($clientUpdate->client_image) {
                $inputUpdate['client_image'] = $clientImage;
            }

            $clientUpdate = $client->update($inputUpdate);

            if ($clientUpdate) {
                return redirect()->route('client.manage')->with('success', 'Berhasil mengupdate data klien');
            }
            return redirect()->back()->with('error', 'Gagal mengupdate data klien');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);

        try {
            $pathLogo = public_path() . '/images/clients/' . $client->client_image;
            File::delete($pathLogo);

            $clientDelete = $client->delete();

            if ($clientDelete) {
                return redirect()->route('client.manage')->with('success', 'Berhasil menghapus data klien');
            }
            return redirect()->back()->with('error', 'Gagal menghapus data klien');
            
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }
}
