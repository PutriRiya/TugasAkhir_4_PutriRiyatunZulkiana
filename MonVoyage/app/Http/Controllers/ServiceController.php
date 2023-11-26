<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::latest()->paginate(5);
        return view('admins.services.edit', compact('services'));
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
        $service = Service::findOrFail($id);
        return view('admins.services.edit', compact('service'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'quote' => 'required|min:5',
            'title' => 'required|min:3',
            'subtitle' => 'required|min:5',
            'isi'   => 'required|min:10',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/service', $image->hashName());

            Storage::delete('public/service/', $service->image);

            $service->update([
                'quote' => $request->quote,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'isi'   => $request->isi,
                'link'  => $request->link,
                'image' => $image->hashName()
            ]);
        } else {
            $service->update([
                'quote' => $request->quote,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'isi'   => $request->isi,
                'link'  => $request->link
            ]);
        }
        return redirect()->route('services.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
