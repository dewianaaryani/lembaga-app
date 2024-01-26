<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DosenController extends Controller
{
    public function index(){
        return view('lembaga.dosen.index');
    }
    public function create(){
        return view('lembaga.dosen.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            
        ]);

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('username')),
            'type' => 0,
        ]);
        return redirect()->route('lembaga.dosen.index')
            ->with('success', 'Dosen created successfully.');
    }
}
