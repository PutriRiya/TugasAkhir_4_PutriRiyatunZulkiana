@extends('adminlayouts.index')

@section('content')
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    @foreach ($services as $s)
                    <form action="{{ route('services.update', $s->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold mt-3">Quote</label>
                            <input type="text" class="form-control @error('quote') is-invalid @enderror" name="quote" value="{{ old('quote', $s->quote) }}" placeholder="Masukkan Quote">
                        
                            <!-- error message untuk title -->
                            @error('quote')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $s->title) }}" placeholder="Masukkan Judul Post">
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">SubJudul</label>
                            <textarea class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" rows="5" placeholder="Masukkan Isi">{{ old('subtitle', $s->subtitle) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('subtitle')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Konten</label>
                            <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="5" placeholder="Masukkan Isi">{{ old('isi', $s->isi) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('isi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Link YouTube</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $s->link) }}" placeholder="Masukkan Link">
                        
                            <!-- error message untuk title -->
                            @error('link')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control" name="image">
                            <img src="/storage/service/{{ $s->image }}" width="30%">
                        </div>

                        {{-- <a href="{{ route('services.index') }}" class="btn btn-md btn-secondary">KEMBALI</a> --}}

                        <div class="button" style="float: right">
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </div>
                    </form> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-group {
        margin-bottom: 3%;
    }
    input {
        margin-bottom: 3%;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection