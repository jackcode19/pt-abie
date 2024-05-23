<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $dataContact = Contact::first();
        return view('frontend.contact.contact', compact('dataContact'));
    }
}
