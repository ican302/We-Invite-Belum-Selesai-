<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return view('main', compact('themes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'view_file' => 'required',
            'thumbnail' => 'required',
            'path' => 'required',
        ]);

        $slug = Str::slug($request->name);

        if (Theme::where('slug', $slug)->exists()) {
            return redirect()->back()->withErrors(['slug' => 'Slug sudah ada, silakan gunakan nama tema yang berbeda']);
        }

        Theme::create([
            'name' => $request->name,
            'view_file' => $request->view_file,
            'thumbnail' => $request->thumbnail,
            'path' => $request->path,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.tema')->with('success', 'Tema berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'view_file' => 'required',
            'thumbnail' => 'required',
            'path' => 'required',
        ]);

        $theme = Theme::findOrFail($id);
        $slug = Str::slug($request->name);

        if (Theme::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->withErrors(['slug' => 'Slug sudah ada, silakan gunakan nama tema yang berbeda']);
        }

        $theme->update([
            'name' => $request->name,
            'view_file' => $request->view_file,
            'thumbnail' => $request->thumbnail,
            'path' => $request->path,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.tema')->with('success', 'Tema berhasil diperbarui');
    }

    public function demo($slug)
    {
        $theme = Theme::where('slug', $slug)->firstOrFail();
        return view('demo.' . $theme->view_file);
    }

    public function destroy($id)
    {
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return redirect()->route('admin.tema')->with('success', 'Tema berhasil dihapus');
    }
}
