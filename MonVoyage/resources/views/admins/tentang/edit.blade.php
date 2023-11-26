@extends('adminlayouts.index')

@section('content')
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        @foreach ($tentangs as $t)    
                        <form action="{{ route('tentangs.update', $t->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Question</label>
                                <input type="text" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question', $t->question) }}" placeholder="Ketik...">
                            </div>

                            @error('question')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Answer</label>
                                <textarea class="form-control @error('answer') is-invalid @enderror" name="answer" rows="5" placeholder="Ketik...">{{ old('answer', $t->answer) }}</textarea>
                            </div>

                            @error('answer')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- 1 --}}
                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Label 1</label>
                                <input type="text" class="form-control @error('label1') is-invalid @enderror" name="label1" value="{{ old('label1', $t->label1) }}" placeholder="Ketik...">
                            </div>

                            @error('label1')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi1') is-invalid @enderror" name="deskripsi1" rows="5" placeholder="Ketik...">{{ old('deskripsi1', $t->deskripsi1) }}</textarea>
                            </div>

                            @error('deskripsi1')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                            {{-- 2 --}}
                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Label 2</label>
                                <input type="text" class="form-control @error('label2') is-invalid @enderror" name="label2" value="{{ old('label2', $t->label2) }}" placeholder="Ketik...">
                            </div>

                            @error('label2')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi2') is-invalid @enderror" name="deskripsi2" rows="5" placeholder="Ketik...">{{ old('deskripsi2', $t->deskripsi2) }}</textarea>
                            </div>

                            @error('deskripsi2')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- 3 --}}
                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Label 3</label>
                                <input type="text" class="form-control @error('label3') is-invalid @enderror" name="label3" value="{{ old('label3', $t->label3) }}" placeholder="Ketik...">
                            </div>

                            @error('label3')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi3') is-invalid @enderror" name="deskripsi3" rows="5" placeholder="Ketik...">{{ old('deskripsi3', $t->deskripsi3) }}</textarea>
                            </div>

                            @error('deskripsi3')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- 4 --}}
                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Label 4</label>
                                <input type="text" class="form-control @error('label4') is-invalid @enderror" name="label4" value="{{ old('label4', $t->label4) }}" placeholder="Ketik...">
                            </div>

                            @error('label4')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi4') is-invalid @enderror" name="deskripsi4" rows="5" placeholder="Ketik...">{{ old('deskripsi4', $t->deskripsi4) }}</textarea>
                            </div>

                            @error('deskripsi4')
                                <div class="alert alert-danger mt2">
                                    {{ $message }}
                                </div>
                            @enderror

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
@endsection