<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\BukuAjarTeks;
use App\Models\Penelitian;

class BukuAjarTeksController extends Controller
{
    public function index()
    {
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        $penelitianIds = $penelitians->pluck('id');

        // Retrieve BukuAjarTeks where penelitian_id is in $penelitianIds
        $bukuAjarTeks = BukuAjarTeks::whereIn('id_penelitian', $penelitianIds)->get();
        
        return view('buku-ajar-teks.index', compact('bukuAjarTeks'));
    }

    public function create()
    {
        
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        return view('buku-ajar-teks.create', compact('penelitians'));
    }

public function store(Request $request)
    {
        
        $request->validate([
            'sertifikat_buku_ajar' => 'required|string',
            'id_penelitian' => 'required|string',
            'penerbit' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx', // Assuming it's a file path or storage reference
            'judul' => 'required|string',
            'isbn' => 'required|string',
            'jumlah_halaman' => 'required|integer',
        ]);
        
        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $lampiranPath = $file->store('storage/lampiran');
             // 'lampiran' is the storage directory; adjust as needed
        }

        // Create a new record in the database
        BukuAjarTeks::create([
            'sertifikat_buku_ajar' => $request->input('sertifikat_buku_ajar'),
            'id_penelitian' => $request->input('id_penelitian'),
            'penerbit' => $request->input('penerbit'),
            'lampiran' => $lampiranPath,
            'judul' => $request->input('judul'),
            'isbn' => $request->input('isbn'),
            'jumlah_halaman' => $request->input('jumlah_halaman'),
            // Add other fields as needed
        ]);
        

        return redirect()->route('buku-ajar-teks.index')->with('success', 'Buku Ajar Teks created successfully.');
    }

    public function show($id)
    {
        $bukuAjarTeks = BukuAjarTeks::find($id);
        $originalPath = $bukuAjarTeks->lampiran;

        // Remove the "public/" part
        $path = str_replace('public/', '', $originalPath);

        // Now $cleanedPath contains the path without "public/"
        
        return view('buku-ajar-teks.show', compact('bukuAjarTeks', 'path'));
    }

    public function edit($id)
    {
        $bukuAjarTeks = BukuAjarTeks::find($id);
        return view('buku-ajar-teks.edit', compact('bukuAjarTeks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sertifikat_buku_ajar' => 'required|string',
            'id_penelitian' => 'required|string',
            'penerbit' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx', // Assuming it's a file path or storage reference
            'judul' => 'required|string',
            'isbn' => 'required|string',
            'jumlah_halaman' => 'required|integer',
        ]);

        // Find the existing record in the database
        $bukuAjarTeks = BukuAjarTeks::findOrFail($id);

        // Update other fields
        $bukuAjarTeks->sertifikat_buku_ajar = $request->input('sertifikat_buku_ajar');
        $bukuAjarTeks->id_penelitian = $request->input('id_penelitian');
        $bukuAjarTeks->penerbit = $request->input('penerbit');
        $bukuAjarTeks->judul = $request->input('judul');
        $bukuAjarTeks->isbn = $request->input('isbn');
        $bukuAjarTeks->jumlah_halaman = $request->input('jumlah_halaman');

        // Handle file update
        if ($request->hasFile('lampiran')) {
            // Delete the existing file if it exists
            if ($bukuAjarTeks->lampiran) {
                Storage::delete($bukuAjarTeks->lampiran);
            }

            // Store the new file
            $file = $request->file('lampiran');
            $bukuAjarTeks->lampiran = $file->store('storage/lampiran');
        }

        // Save the changes
        $bukuAjarTeks->save();

        return redirect()->route('buku-ajar-teks.index')->with('success', 'Buku Ajar Teks updated successfully.');
    }

   

    public function destroy($id)
    {
        BukuAjarTeks::destroy($id);
        return redirect()->route('buku-ajar-teks.index')->with('success', 'Buku Ajar Teks deleted successfully.');
    }
}
