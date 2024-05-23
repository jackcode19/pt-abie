<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')) {
            Storage::delete('public/abouts'. $about->image);
            $extension = $request->file('image')->extension();
            $image = 'abouts-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('image')->storeAs('public/abouts', $image);

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
