<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home',compact('user'));
    }
    public function lembagaHome()
    {
        $user = Auth::user();
        return view('lembagaHome',compact('user'));
    }
    public function downloadFile($filename)
    {
        $filePath = storage_path("app/{$filename}");

        if (Storage::exists("public/{$filename}")) {
            return response()->download($filePath, $filename, [], 'inline');
        }
    }
}
