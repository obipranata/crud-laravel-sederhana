<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar User</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <a href="/" class="btn btn-primary mb-3">Home</a>
      <a href="{{route('user.store')}}" class="btn btn-success mb-3">Tambah User</a>
      <h2 class="text-center">Data User</h2>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 60%">
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aktif</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <th>{{$user->nama}}</th>
              <th>{{$user->sekolah->nama_sekolah}}</th>
              <th>{{$user->email}}</th>
              <th>{{$user->role}}</th>
              <th>{{$user->aktif ? "Ya" : "Tidak"}}</th>
              <th>
                <a class="btn btn-info btn-sm" href="{{route('user.detail', $user->id)}}">Detail</a>
                <a class="btn btn-danger btn-sm" href="{{route('user.destroy', $user->id)}}">Hapus</a>
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