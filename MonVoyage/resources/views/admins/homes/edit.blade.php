@extends('adminlayouts.index')

@section('content')
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    @foreach ($homes as $h)    
                        <form action="{{ route('home.update', $h->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Judul</label>
                                <textarea class="form-control @error('maintitle') is-invalid @enderror" name="maintitle" rows="5" placeholder="Ketik...">{{ old('maintitle', $h->maintitle) }}</textarea>
                                
                                @error('maintitle')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">SubJudul</label>
                                <textarea class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" rows="5" placeholder="Ketik...">{{ old('subtitle', $h->subtitle) }}</textarea>
                                
                                @error('subtitle')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="button mt-3" style="float: right">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection