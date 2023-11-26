<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TentangController extends Controller
{
    public function index(): View
    {
        $tentangs = Tentang::latest()->paginate(5);
        return view('admins.tentang.edit', compact('tentangs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id): View
    {
        $tentang = Tentang::findOrFail($id);
        return view('admins.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $tentang = Tentang::find($id);
        $tentang->update($request->except(['_token', 'submit']));
        return redirect('/tentangs');    
    }

    public function destroy(string $id)
    {
        //
    }
}
