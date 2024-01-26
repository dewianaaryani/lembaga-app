<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Penelitian;
use App\Models\Forum;
class ForumController extends Controller
{
    public function index()
    {
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        $penelitianIds = $penelitians->pluck('id');

        // Retrieve Forum where penelitian_id is in $penelitianIds
        $forums = Forum::whereIn('id_penelitian', $penelitianIds)->get();
        
        return view('forum.index', compact('forums'));
    }

    public function create()
    {
        
        $penelitians = Penelitian::where('nidn', Auth::user()->username)->get();
        return view('forum.create', compact('penelitians'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'sertifikat_forum' => 'required|string',
            'id_penelitian' => 'required|string',
            'judul' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx', // Assuming it's a file path or storage reference
            'nama_forum' => 'required|string',
            'institusi_penyelenggara' => 'required|string',
            'waktu_pelaksanaan_awal' => 'required|date',
            'waktu_pelaksanaan_akhir' => 'required|date',
            'tempat' => 'required|string',
            'status' => 'required|string',
        ]);
        
        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $lampiranPath = $file->store('public/lampiran');
             // 'lampiran' is the storage directory; adjust as needed
        }

        // Create a new record in the database
        Forum::create([
            'sertifikat_forum' => $request->input('sertifikat_forum'),
            'id_penelitian' => $request->input('id_penelitian'),
            'judul' => $request->input('judul'),
            'lampiran' => $lampiranPath,
            'nama_forum' => $request->input('nama_forum'),
            'institusi_penyelenggara' => $request->input('institusi_penyelenggara'),
            'waktu_pelaksanaan_awal' => $request->input('waktu_pelaksanaan_awal'),
            'waktu_pelaksanaan_akhir' => $request->input('waktu_pelaksanaan_akhir'),
            'tempat' => $request->input('tempat'),
            'status' => $request->input('status'),
            // Add other fields as needed
        ]);
        

        return redirect()->route('forum.index')->with('success', 'Buku Ajar Teks created successfully.');
    }

    public function show($id)
    {
        $forum = Forum::find($id);
        $originalPath = $forum->lampiran;

        // Remove the "public/" part
        $path = str_replace('public/', '', $originalPath);

        // Now $cleanedPath contains the path without "public/"
        
        return view('forum.show', compact('forum', 'path'));
    }

    public function edit($id)
    {
        $forum = Forum::find($id);
        return view('forum.edit', compact('forum'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'judul' => 'required|string',
            'lampiran' => 'nullable|file|mimes:pdf,doc,docx', // Assuming it's a file path or storage reference
            'nama_forum' => 'required|string',
            'institusi_penyelenggara' => 'required|string',
            'waktu_pelaksanaan_awal' => 'required|date',
            'waktu_pelaksanaan_akhir' => 'required|date',
            'tempat' => 'required|string',
            'status' => 'required|string',
        ]);

        // Find the existing record in the database
        $forum = Forum::findOrFail($id);

        // Update other fields
    
        $forum->judul = $request->input('judul');
        $forum->nama_forum = $request->input('nama_forum');
        $forum->institusi_penyelenggara = $request->input('institusi_penyelenggara');
        $forum->waktu_pelaksanaan_awal = $request->input('waktu_pelaksanaan_awal');
        $forum->waktu_pelaksanaan_akhir = $request->input('waktu_pelaksanaan_akhir');
        $forum->tempat = $request->input('tempat');
        $forum->status = $request->input('status');

        // Handle file update
        if ($request->hasFile('lampiran')) {
            // Delete the existing file if it exists
            if ($forum->lampiran) {
                Storage::delete($forum->lampiran);
            }

            // Store the new file
            $file = $request->file('lampiran');
            $forum->lampiran = $file->store('public/lampiran');
        }

        // Save the changes
        $forum->save();

        return redirect()->route('forum.index')->with('success', 'Forum updated successfully.');
    }

   

    public function destroy($id)
    {
        Forum::destroy($id);
        return redirect()->route('forum.index')->with('success', 'Buku Ajar Teks deleted successfully.');
    }
}
