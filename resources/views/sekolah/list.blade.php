<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Sekolah</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <a href="/" class="btn btn-primary mb-3">Home</a>
      <a href="{{route('sekolah.store')}}" class="btn btn-success mb-3">Tambah Sekolah</a>
      <h2 class="text-center">Data Sekolah</h2>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 60%">
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sekolah as $k)
            <tr>
              <th>{{$k->nama_sekolah}}</th>
              <th>{{$k->email_sekolah}}</th>
              <th>{{$k->alamat_sekolah}}</th>
              <th>
                <a class="btn btn-info btn-sm" href="{{route('sekolah.detail', $k->id)}}">Detail</a>
                <a class="btn btn-danger btn-sm" href="{{route('sekolah.destroy', $k->id)}}">Hapus</a>
              </th>
            </tr>
            @endforeach
        </tbody>
      </table>
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