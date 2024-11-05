<?php

namespace App\Http\Controllers;

use App\Models\Theme;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function tema()
    {
        $themes = Theme::all();

        return view('admin.tema', compact('themes'));
    }

    public function cs()
    {
        return view('admin.cs');
    }
}
