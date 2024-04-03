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
        $pathImage = public_path() . '/images/about/' . $about->logo;

        if ($request->hasFile('logo')) {
            File::delete($pathImage);
            $imageFile = $request->logo;
            $logo = uniqid() . '_' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path() . '/images/about/', $logo);
        } elseif ($about->logo) {
            $logo = $about->logo;
        } else {
            $logo = null;
        }

        $inputUpdate = $request->all();

        try {
            $updateAbout = $about;
            // Jika ada image baru
            if ($updateAbout->logo) {
                $inputUpdate['logo'] = $logo;
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
