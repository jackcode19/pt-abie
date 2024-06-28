<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    public function manage()
    {
        $testimonial['table'] = [
            'table_url' => route('testimonial.data'),
            'columns' => [
                [
                    'label' => 'Klien',
                    'name' => 'client',
                ],
                [
                    'label' => 'Deskripsi',
                    'name' => 'description',
                ],
                [
                    'label' => 'Tanggal Dibuat',
                    'name' => 'created_at',
                ],
                [
                    'label' => 'Action',
                    'name' => 'action'
                ],
            ]
        ];

        return view('admin.testimonial.manage', $testimonial);
    }

    public function getData()
    {
        try {
            $testimonial = Testimonial::select([
                'testimonials.id',
                'testimonials.description',
                'testimonials.created_at',
                'clients.title as client'
            ])
            ->join('clients', 'clients.id', '=', 'testimonials.client_id')
            ->orderBy('created_at', 'desc');

            return DataTables::of($testimonial)

            ->addColumn('created_at', function ($testimonial) {
                    return date('d-m-Y', strtotime($testimonial->created_at));
                })

            ->addColumn('action', function ($testimonial) {
                $string = '<a href="' . route('testimonial.edit', $testimonial->id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('testimonial.delete', $testimonial->id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

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
        $data['clients'] = Client::get();
        return view('admin.testimonial.form', $data);
    }

    public function store(Request $request)
    {
        $input  = $request->all();

        try {
            $createTestimonial = Testimonial::create($input);
        
        if ($createTestimonial) {
            return redirect()->route('testimonial.manage')->with('success', 'Berhasil menambahkan data testimonial baru');
        }
        return redirect()->back()->with('error', 'Gagal menambahkan data testimonial baru');

        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $data['testimonial'] = Testimonial::findOrFail($id);
            $dataClient['clients'] = Client::get();
            return view('admin.testimonial.form', $data, $dataClient);
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $inputUpdate = $request->all();

        try {
            $testimonialUpdate = $testimonial;

            $testimonialUpdate = $testimonial->update($inputUpdate);

            if ($testimonialUpdate) {
                return redirect()->route('testimonial.manage')->with('success', 'Berhasil mengubabah data testimonial');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data testimonial');
        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $testimoniaDelete = $testimonial->delete();

        if ($testimoniaDelete) {
            return redirect()->route('testimonial.manage')->with('success', 'Berhasil menghapus data testimonial');
        }
        return redirect()->back()->with('error', 'Gagal menghapus data testimonial');
    }
}
