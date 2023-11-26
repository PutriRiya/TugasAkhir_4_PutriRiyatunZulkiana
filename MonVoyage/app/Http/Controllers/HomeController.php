<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Galeri;
use App\Models\Homes;
use App\Models\Service;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $ho = Homes::all();
        $about = Tentang::all();
        $galeri = Galeri::all();
        $servis = Service::all();
        $contacts = Contact::all();
        return view('user.index', compact('ho', 'about', 'galeri', 'servis', 'contacts'));
    }

    public function create()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|min:1',
            'email'     => 'required|min:3',
            'subject'   => 'required|min:5'
        ]);

        Contact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject
        ]);

        return redirect()->route('contacts.index')->with(['success' => 'Berhasil mengirim pesan!']);
    }
}
