<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function manage()
    {
        $contact['contact'] = Contact::first();
        return view('admin.contact.manage', $contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $pathLogo = public_path() . '/images/contact/' . $contact->logo;

        if ($request->hasFile('logo')) {
            File::delete($pathLogo);
            $imageFile = $request->logo;
            $logo = $imageFile->extension();
            $imageFile->move(public_path() . '/images/contact/', $logo);
        } elseif ($contact->logo) {
            $logo = $contact->logo;
        } else {
            $logo = null;
        }


        $inputUpdate = $request->all();
        try {
            $updateContact = $contact;
            // Jika ada image baru
            if ($updateContact->logo) {
                $inputUpdate['logo'] = $logo;
            }

            $updateContact->update($inputUpdate);

            if ($updateContact) {
                return redirect()->route('contact.manage')->with('success', 'Berhasil mengubah data kontak profil perusahaan');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data profil perusahaan');
        } catch (\Exception $error) {
                return redirect()->back()->with($error->getMessage());
        }
    }
}
