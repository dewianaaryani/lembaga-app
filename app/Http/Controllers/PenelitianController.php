<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penelitian;
class PenelitianController extends Controller
{
    public function index(){
        $user = Auth::user();
        $penelitians = Penelitian::where('nidn', $user->username)->get();
        
        return view('penelitian.index', compact('user', 'penelitians'))->with('i', (request()->input('page', 1) -1)*5);
    }
    public function show($id){
        $penelitian = Penelitian::findOrFail($id);
        return view('penelitian.show', compact('penelitian'));
    }
    public function edit($id){
        $penelitian = Penelitian::findOrFail($id);
        return view('penelitian.edit', compact('penelitian'));
    }
    public function update(Request $request, $id){
        $validatedData = $request->validate([
            // Add your validation rules here based on your model fields
            'judul' => 'nullable|string',
            'anggota1' => 'nullable|string',
            'anggota2' => 'nullable|string',
            'fakultas' => 'nullable|string',
            'skema_penelitian' => 'nullable|string',
            'program_hibah' => 'nullable|string',
            'hak_cipta' => 'nullable|string',
            'kontrak_riset' => 'nullable|string',
            'status' => 'nullable|string',
            'kontrak_lddikti' => 'nullable|string',
            'tk_lddikti' => 'nullable|date',
            'no_tanggal_dipa' => 'nullable|string',
            'prototype' => 'nullable|string',
            'publikasi' => 'nullable|string',
            // Add more fields as needed
        ]);
        // Find the Penelitian by ID
        $penelitian = Penelitian::findOrFail($id);

        // Update the Penelitian with the validated data
        $penelitian->update($validatedData);


        return redirect()->route('penelitian.index')
        ->with('success', 'Data send successfully.');
    }

}
