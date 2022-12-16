<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail User</title>
  </head>
  <body>
    
    <div class="container mt-5">
      <a href="{{route('user.list')}}" class="btn btn-success mb-3">List</a>
      @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert" style="width: 60%">
          <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="card" style="width: 60%">
        <h5 class="card-header">Update User</h5>
        <div class="card-body">
          <form method="post" action="{{route('user.update', $user->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{$user->nama}}">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
            </div>
            <div class="mb-3">
              <label for="sekolah" class="form-label">Sekolah</label>
              <select class="form-select" name="id_sekolah">
                <option>Pilih</option>
                @foreach ($sekolah as $s)
                  <option value="{{$s['id']}}" {{$s['id'] == $user->id_sekolah ? 'selected' : '' }}>{{$s['nama_sekolah']}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role</label>
              <select class="form-select" name="role">
                <option>Pilih</option>
                @foreach ($role as $r)
                  <option value="{{$r['id']}}" {{$r['id'] == $user->role ? 'selected' : '' }}>{{$r['role']}}</option>
                @endforeach
              </select>
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