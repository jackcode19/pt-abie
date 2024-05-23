<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    public function manage()
    {
        $gallery['table'] = [
            'table_url' => route('gallery.data'),
            'columns' => [
                [
                    'label' => 'Judul',
                    'name' => 'title',
                ],
                [
                    'label' => 'Cover',
                    'name' => 'cover_image',
                ],
                [
                    'label' => 'Aksi',
                    'name' => 'action'
                ],
            ],
        ];

        return view('admin.gallery.manage', $gallery);
    }

    public function getData()
    {
        try {
            $gallery = Gallery::select([
                'gallery_id',
                'title',
                'cover_image',
                'created_at'
            ])
            ->orderBy('created_at', 'asc');

            return DataTables::of($gallery)

            ->addColumn('created_at', function ($gallery) {
                    return date('d-m-Y', strtotime($gallery->created_at));
                })

            ->addColumn('cover_image', function ($gallery) {
                    $url = Storage::url('gallery/covers/'. $gallery->cover_image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded" />';
                })

            ->addColumn('action', function ($gallery) {
                $string = '<a href="' . route('gallery.edit', $gallery->gallery_id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                $string .= '<form action="' . route('gallery.delete', $gallery->gallery_id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                return $string;
            })
            ->rawColumns(['action', 'cover_image'])
            ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function create()
    {
        return view('admin.gallery.form');
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();

            if ($request->hasFile('cover_image')) {
                $extension = $request->file('cover_image')->extension();
                $imageName = $input['title'] . '-covers-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('cover_image')->storeAs('public/gallery/covers', $imageName);
            }
           

            $input['cover_image'] = $imageName;
            $createGalley = Gallery::create($input);
            

            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $galleryImages) {   
                $imageGallery = $input['title'] . '-gallery-image-' . time() . rand(1, 1000) . '.' . $galleryImages->extension();
                $galleryImages->move(public_path() . '/storage/gallery/gallery_image/', $imageGallery);
                // $path = $galleryImages->storeAs('public', 'gallery', 'gallery_image', $imageGallery);

                    GalleryImage::create([
                        'gallery_id' => $createGalley->gallery_id,
                        'image' => $imageGallery,
                    ]);
                }
            }

            if ($createGalley) {
                return redirect()->route('gallery.manage')->with('success', 'Berhasil menambahkan gallery baru');
            }
            return redirect()->back()->with('error', 'Gagal menambahkan gallery baru');
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $gallery['gallery'] = Gallery::query()
            ->where('galleries.gallery_id', $id)
            ->findOrFail($id);

            $tableGalleryImage = [
                [
                    'label' => 'Image',
                    'name' => 'image'
                ],
                [
                    'label' => 'Aksi',
                    'name' => 'action',
                ],
            ];

            $data['object'] = [
                'url' => route('gallery.dataGalleryImage', ['id' => $id]),
                'data' => $gallery,
                'columns_gallery_image' =>  $tableGalleryImage,
            ];

            return view('admin.gallery.form', $gallery, $data);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function getDataImageById($id)
    {
        try {
            $images = GalleryImage::query()
            ->where('gallery_id', $id);

        return DataTables::of($images)
                ->addColumn('image', function ($images) {
                    // $url = Storage::url('gallery/covers/gallery_image/'. $images->image);
                    $url = asset('/storage/gallery/gallery_image/'. $images->image);
                    return '<img src="' . $url . '" alt="" style="width: 170px;" height="120px" class="img-rounded">';
                })
                ->addColumn('action', function ($images) {
                    $string = '<a href="' . route('gallery.editGalleryImage',  $images->gallery_image_id) . '" class="btn btn-info btn-sm mr-3 " style="margin-right: 10px;"><i class="fas fa-edit"></i></a>';

                    $string .= '<button title="Hapus" class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete-form"><i class="fa fa-trash"></i></button>';

                    $string .= '<form action="' . route('gallery.deleteGalleryImage', $images->gallery_image_id) . '" method="POST">' . method_field('delete') . csrf_field() . '</form>';

                    return $string;
                })

                ->rawColumns(['action', 'image'])
                ->make(true);
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    public function update(Request $request, $id)
    {

        $gallery = Gallery::findOrFail($id);

            $inputUpdate = $request->all();

            if ($request->hasFile('cover_image')) {
                Storage::delete('public/gallery/covers/'. $gallery->cover_image);
                $extension = $request->file('cover_image')->extension();
                $imageName = $gallery['title'] . '-covers-' . time() . rand(1, 1000) . '.' . $extension;
                $path = $request->file('cover_image')->storeAs('public/gallery/covers', $imageName);
            } elseif($gallery->cover_image) {
                $imageName = $gallery->cover_image;
            } else {
                $imageName = null;
            }

        try {

            $updateGallery = $gallery;

            if ($updateGallery->cover_image) {
                $inputUpdate['cover_image'] = $imageName;
            }
            
            $updateGallery = $gallery->update($inputUpdate);

            if ($updateGallery) {
                return redirect()->route('gallery.manage')->with('success', 'Berhasil mengubah data gallery');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data gallery');


        } catch (\Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $gallery = Gallery::findOrFaiL($id);
            Storage::delete('public/gallery/covers/' . $gallery->cover_image);

            $galleryDelete = $gallery->delete();

            if ($galleryDelete) {
                return redirect()->route('gallery.manage')->with('success', 'Berhasil menghapus data gallery');
            }
            return redirect()->back()->with('error', 'Gagal menghapus data gallery');
        } catch (\Exception $error) {
            return $error->getMessage();
        }

    }

    public function getEditGalleryImage($id){
        $data['gallery_image'] = GalleryImage::findOrFail($id);
        return view('admin.gallery.gallery_image.form', $data);
    }

    public function updateGalleryImage(Request $request, $id)
    {
        $galleryImage = GalleryImage::findOrFail($id);
        $path = public_path() . '/storage/gallery/gallery_image/'. $galleryImage->image;
        
        try {
            if ($request->hasFile('image')) {
            File::delete($path);
            $extension = $request->file('image');
            $imageName = '-gallery-image-' . time() . rand(1, 1000) . '.' . $extension->extension();
            $extension->move(public_path() . '/storage/gallery/gallery_image/', $imageName);
        }
            elseif ($galleryImage->image) {
                $imageName = $galleryImage->image;
            }
            else{
                $imageName = null;
            }

            $inputUpdate = $request->all();
            $inputUpdate['image'] = $imageName;

            $updateImage = $galleryImage->update($inputUpdate);

            if ($updateImage) {
                return redirect()->route('gallery.manage')->with('success', 'Berhasil mengubah galeri image');
            }
            return redirect()->back()->with('error', 'Gagal mengubah gallery image');

        } catch (\Exception $error) {
            return $error->getMessage();
        }
        
    }

    public function deleteGalleryImage($id)
    {
       try {
         $galleryImage = GalleryImage::findOrFail($id);
         $path = public_path() . '/storage/gallery/gallery_image/'. $galleryImage->image;

        $delete = $galleryImage->delete();
        File::delete($path);

        if ($delete) {
            return redirect()->route('gallery.edit')->with('success', 'Berhasil menghapus galeri image');
        }
        return redirect()->back()->with('error', 'Gagal menghapus gallery image');

       } catch (\Exception $error) {
        return $error->getMessage();
       }
    }
}
