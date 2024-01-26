<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Penelitian;
use App\Models\Hki;

class HkiController extends Controller
{
    public function index()
    {
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        $penelitianIds = $penelitians->pluck('id');

        // Retrieve HKI where penelitian_id is in $penelitianIds
        $hkis = Hki::whereIn('id_penelitian', $penelitianIds)->get();
        
        return view('hki.index', compact('hkis'));
    }

    public function create()
    {
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        return view('hki.create', compact('penelitians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sertifikat_hki' => 'required|string',
            'id_penelitian' => 'required|string',
            'judul' => 'required|string',
            'status' => 'required|string',
            'jenis' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx', // Assuming it's a file path or storage reference
            
        ]);
        
        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $lampiranPath = $file->store('public/lampiran');
             // 'lampiran' is the storage directory; adjust as needed
        }

        // Create a new record in the database
        HKI::create([
            'sertifikat_hki' => $request->input('sertifikat_hki'),
            'id_penelitian' => $request->input('id_penelitian'),
            'judul' => $request->input('judul'),
            'lampiran' => $lampiranPath,
            'status' => $request->input('status'),
            'jenis' => $request->input('jenis'),
            // Add other fields as needed
        ]);
        

        return redirect()->route('hki.index')->with('success', 'HKI created successfully.');
    }

    public function show($id)
    {
        // Show logic here
        $hki = HKI::find($id);
        $originalPath = $hki->lampiran;

        // Remove the "public/" part
        $path = str_replace('public/', '', $originalPath);


        return view('hki.show', compact('hki', 'path'));
    }

    public function edit($id)
    {
        // Edit logic here
        $hki = HKI::find($id);
        return view('hki.edit', compact('hki'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'status' => 'required|string',
            'jenis' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // Find the existing record in the database
        $hki = Hki::findOrFail($id);

        // Update other fields
        $hki->judul = $request->input('judul');
        $hki->status = $request->input('status');
        $hki->jenis = $request->input('jenis');

        // Handle file update
        if ($request->hasFile('lampiran')) {
            // Delete the existing file if it exists
            if ($hki->lampiran) {
                Storage::delete($hki->lampiran);
            }

            // Store the new file
            $file = $request->file('lampiran');
            $hki->lampiran = $file->store('public/lampiran');
        }

        // Save the changes
        $hki->save();

        return redirect()->route('hki.index')->with('success', 'HKI updated successfully.');
    }


    public function destroy($id)
    {
        Hki::destroy($id);
        return redirect()->route('hki.index')->with('success', 'HKI deleted successfully.');
    }
}
