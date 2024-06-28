<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
     public function index()
    {
        $homeContent = HomeContent::first();
        return view('admin.home.manage', compact('homeContent'));
    }

    public function create()
    {
        return view('admin.home.manage');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        
        $homeContent = HomeContent::create($request->all());
        
        return redirect()->route('home.index')
            ->with('success', 'Home content created successfully.');
    }

    public function edit(HomeContent $homeContent)
    {
        return view('admin.home.manage', compact('homeContent'));
    }

    public function update(Request $request, HomeContent $homeContent)
    {   
        $homeContent->update($request->all());
        
        return redirect()->route('home.index')
            ->with('success', 'Konten Halaman Home berhasil ditambahkan');
    }

    public function destroy(HomeContent $homeContent)
    {
        $homeContent->delete();
        
        return redirect()->route('home.index')
            ->with('success', 'Konten Halaman Home berhasil dihapus');
    }
}
