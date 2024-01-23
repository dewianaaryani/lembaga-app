<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function create(){
        echo "Hello";
        return view('lembaga.penelitian.create');
    }
    public function index(){
        echo "Hello";
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nidn' => 'required',
            'no_penugasan' => 'required',
            'tk_penugasan' => 'required|date',
            'judul' => 'required',
            'dana' => 'required|numeric',
        ]);

        // Create a new record in the database using Eloquent
        Penelitian::create($validatedData);

        // Redirect to a success page or wherever you want
        return redirect()->route('lembaga.penelitian.index')->with('success', 'Penelitian created successfully.');
    }
}
