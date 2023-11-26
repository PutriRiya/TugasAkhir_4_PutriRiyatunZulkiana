<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactUsController extends Controller
{
    public function index(): View
    {
        $contactus = Contact::latest()->paginate(5);
        return view('admins.contact.contactus', compact('contactus'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id): View
    {
        $contactus = Contact::findOrFail($id);
        return view('admins.contact.contactus', compact('contactus'));
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
        $contactus = Contact::findOrFail($id);

        $contactus->delete();

        return redirect()->route('contact-us.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
