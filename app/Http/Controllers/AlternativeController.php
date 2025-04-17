<?php

namespace App\Http\Controllers;

use App\Models\Alternative; // Import model Alternative
use Illuminate\Http\Request;
use Illuminate\View\View; // Import the View class

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View // Specify the return type as View
    {
        // Ambil semua data alternatif dari database
        $alternatives = Alternative::all();

        // Kirim data alternatif ke view 'alternative.index'
        return view('alternative.index', compact('alternatives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View // Specify the return type as View
    {
        // Tampilkan form untuk membuat alternatif baru
        return view('alternative.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diinputkan user
        $request->validate([
            'code' => 'required|unique:alternatives,code',
            'social_media_name' => 'required',
            'social_media_platform' => 'required',
            'cost_per_content' => 'nullable|numeric',
            'contact' => 'nullable',
        ]);

        // Buat alternatif baru di database
        Alternative::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('alternative.index')->with('success', 'Alternatif berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View // Specify the return type as View
    {
        // Ambil data alternatif berdasarkan ID
        $alternative = Alternative::findOrFail($id);

        // Tampilkan detail alternatif
        return view('alternative.show', compact('alternative'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View // Specify the return type as View
    {
        // Ambil data alternatif berdasarkan ID untuk diedit
        $alternative = Alternative::findOrFail($id);

        // Tampilkan form untuk mengedit alternatif
        return view('alternative.edit', compact('alternative'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diinputkan user
        $request->validate([
            'code' => 'required|unique:alternatives,code,' . $id, // Pastikan code unik, kecuali untuk id yang sedang diupdate
            'social_media_name' => 'required',
            'social_media_platform' => 'required',
            'cost_per_content' => 'nullable|numeric',
            'contact' => 'nullable',
        ]);

        // Update data alternatif di database
        $alternative = Alternative::findOrFail($id);
        $alternative->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('alternative.index')->with('success', 'Alternatif berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus data alternatif dari database
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('alternative.index')->with('success', 'Alternatif berhasil dihapus.');
    }
}
