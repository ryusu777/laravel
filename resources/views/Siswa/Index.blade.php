<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siswa</title>
</head>
<body>
  <a href="{{ URL::to('siswa') }}">Lihat Semua</a> | <a href="{{ URL::to('siswa/create') }}">Tambah Siswa</a>
  <h1>Semua siswa</h1>
  @if (Session::get('message')) {{ Session::get('message')}} @endif
  <table border="1">
    <tr>
      <td>Id</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Action</td>
      <td>Delete</td>
    </tr>

    @foreach ($siswa as $key => $value)
    <tr>
      <td>{{ $value->id_siswa }}</td>
      <td>{{ $value->nama }}</td>
      <td>{{ $value->alamat }}</td>
      <td>
        <a href="{{ URL::to('siswa/'.$value->id_siswa) }}">Detail</a>
        |
        <a href="{{ URL::to('siswa/'.$value->id_siswa).'/edit' }}">Edit</a>
      </td>
      <td>
        <form action="{{ URL::to('siswa/'.$value->id_siswa) }}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
