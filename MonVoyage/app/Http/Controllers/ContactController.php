<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::latest()->paginate(5);
        return view('userlayouts.contact', compact('contacts'));
    }

    public function create(): View
    {
        return view('user.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name'      => 'required|min:2',
            'email'     => 'required|min:3',
            'subject'   => 'required|min:5'
        ]);

        Contact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject
        ]);

        return redirect()->route('contact.index')->with(['success' => 'Berhasil mengirim pesan!']);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
