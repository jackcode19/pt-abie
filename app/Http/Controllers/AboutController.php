<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function manage()
    {
        $about = About::first();
        return view('admin.about.manage', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $pathImage = public_path() . '/images/about/' . $about->image;

        if ($request->hasFile('image')) {
            File::delete($pathImage);
            $imageFile = $request->image;
            $image = $about['title'] . '.' . $imageFile->extension();
            $imageFile->move(public_path() . '/images/about/', $image);
        } elseif ($about->image) {
            $image = $about->image;
        } else {
            $image = null;
        }

        $inputUpdate = $request->all();

        try {
            $updateAbout = $about;
            // Jika ada image baru
            if ($updateAbout->image) {
                $inputUpdate['image'] = $image;
            }

            $updateAbout->update($inputUpdate);

            if ($updateAbout) {
                return redirect()->route('about.manage')->with('success', 'Berhasil mengubah data profil perusahaan');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data profil perusahaan');
        } catch (\Exception $error) {
            return redirect()->back()->with($error->getMessage());
        }
    }
}
