<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index(): View
    {
        $homes = Homes::latest()->paginate(5);
        return view('admins.homes.edit', compact('homes'));
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
        $home = Homes::findOrFail($id);
        return view('admins.homes.edit', compact('home'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $home = Homes::find($id);
        $home->update($request->except(['_token', 'submit']));
        return redirect('/home');
    }

    public function destroy(string $id)
    {
        //
    }
}
