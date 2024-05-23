<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('logo')) {
            Storage::delete('public/contact/'. $contact->logo);
            $extension = $request->file('logo')->extension();
            $imageName = 'contact-' . time() . rand(1, 1000) . '.' . $extension;
            $path = $request->file('logo')->storeAs('public/contact', $imageName);
        } elseif ($contact->logo) {
            $imageName = $contact->logo;
        } else {
            $imageName = null;
        }


        $inputUpdate = $request->all();
        try {
            $updateContact = $contact;
            // Jika ada image baru
            if ($updateContact->logo) {
                $inputUpdate['logo'] = $imageName;
            }

            $updateContact->update($inputUpdate);

            if ($updateContact) {
                return redirect()->route('contact.manage')->with('success', 'Berhasil mengubah data kontak profil perusahaan');
            }
            return redirect()->back()->with('error', 'Gagal mengubah data profil perusahaan');
        } catch (\Exception $error) {
                return $error->getMessage();
        }
    }
}
