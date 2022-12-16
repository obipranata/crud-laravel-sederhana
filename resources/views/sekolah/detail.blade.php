<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Sekolah</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <a href="{{route('sekolah.list')}}" class="btn btn-success mb-3">List</a>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 60%">
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="card" style="width: 60%">
        <h5 class="card-header">Detail Sekolah</h5>
        <div class="card-body">
          <form method="post" action="{{route('sekolah.update', $sekolah->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
              <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{$sekolah->nama_sekolah}}">
            </div>
            <div class="mb-3">
              <label for="email_sekolah" class="form-label">Email Sekolah</label>
              <input type="email" class="form-control" id="email_sekolah" name="email_sekolah" value="{{$sekolah->email_sekolah}}">
            </div>
            <div class="mb-3">
              <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
              <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="{{$sekolah->alamat_sekolah}}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>