<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GaleriController extends Controller
{
    public function index(): View
    {
        $galeris = Galeri::latest()->paginate(5);
        return view('admins.galeri.galeri', compact('galeris'));
    }

    public function create(): View
    {
        return view('admins.galeri.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        Galeri::create([
            'image' => $image->hashName()
        ]);

        return redirect()->route('galeris.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    public function show(string $id): View
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeris.edit', compact('galeri'));
    }

    public function edit(string $id): View
    {
        $galeri = Galeri::findOrFail($id);
        return view('admins.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());

            Storage::delete('public/image/', $galeri->image);

            $galeri->update([
                'image' => $image->hashName()
            ]); 
        } else {
            $galeri->update([
                ''
            ]);
        }

        return redirect()->route('galeris.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $galeri = Galeri::findOrFail($id);

        Storage::delete('public/image/'. $galeri->image);

        $galeri->delete();

        return redirect()->route('galeris.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function search(Request $request) {
        $search = $request->search;

        $galeris = DB::table('galeris')
        ->where('id', 'like', "%".$search."%")
        ->paginate();

        return view('admins.galeri.galeri', compact('galeris'));
    }
}
