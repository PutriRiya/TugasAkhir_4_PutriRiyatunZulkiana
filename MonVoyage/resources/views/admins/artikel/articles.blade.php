@extends('adminlayouts.index')

@section('content')
    <button class="btn btn-md btn-success mb-3" id="myBtn">Tambah Artikel</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Keindahan Bukit Teletubis Bromo</td>
                <td class="text-center">
                    <img src="/images/banner-images/bromo.jpeg" class="rounded" style="width: 150px">
                </td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="" method="POST">
                        <a href="" class="btn btn-sm btn-dark">SHOW</a>
                        <a href="" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            <div class="alert alert-danger">Data Belum Tersedia.</div>
        </tbody>
    </table>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          margin-left: 17%;
          left: 0;
          top: 0;
          width: 90%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        input {
            margin-bottom: 3%;
        }
    </style>
    </head>
    <body>
        
        <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <form action="" method="POST" enctype="multipart/form-data">             
                @csrf

                <div class="form-group">
                    <label class="font-weight-bold">Judul Artikel</label>
                    <input type="text" class="form-control @error('judulartikel') is-invalid @enderror" name="judulartikel" value="{{ old('judulartikel') }}" placeholder="Masukkan judulartikel">
                
                    <!-- error message untuk title -->
                    @error('judulartikel')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Isi Artikel</label>
                    <textarea class="form-control @error('kontenartikel') is-invalid @enderror" name="kontenartikel" rows="5" placeholder="Masukkan Konten">{{ old('kontenartikel') }}</textarea>
                
                    <!-- error message untuk content -->
                    @error('kontenartikel')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label class="font-weight-bold">Gambar</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        
                    <!-- error message untuk title -->
                    @error('image')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <a href="" class="btn btn-md btn-secondary">KEMBALI</a>
        
                <div class="button" style="float: right">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </div>
        
            </form> 
        
          </div>
        
        </div>
        
        <script>
        var modal = document.getElementById("myModal");
        
        var btn = document.getElementById("myBtn");
        
        var span = document.getElementsByClassName("close")[0];
        
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        
        </script>
    </body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'kontenartikel' );
</script>
@endsection