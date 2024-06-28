<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $dataService = Service::get();
        return view('frontend.service.service', compact('dataService'));
    }
}
