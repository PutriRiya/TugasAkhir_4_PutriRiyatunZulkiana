@extends('adminlayouts.index')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" style="width: 30%">NAMA</th>
            <th scope="col" style="width: 30%">EMAIL</th>
            <th scope="col" style="width: 40%">SUBJEK</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($contactus as $post)
            <tr>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->subject }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('contact-us.destroy', $post->id) }}" method="POST">
                        {{-- <a href="{{ route('galeris.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                        {{-- <a href="{{ route('galeris.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">Data Belum Tersedia.</div>
        @endforelse
    </tbody>
</table>

{{ $contactus->links() }}

@endsection