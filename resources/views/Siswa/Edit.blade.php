<?php use Illuminate\Support\Facades\Form; ?>
<a href="{{ URL::to('siswa') }}">Lihat Semua</a> | <a href="{{ URL::to('siswa/create') }}">Tambah Siswa</a>
<h1>Edit Siswa</h1>

<Form method="POST" action="{{ URL::to('siswa/'.$siswa->id_siswa) }}">
  @method("PUT")
  @csrf
  <pre>
Nama     <input type="text" name="nama" value={{ $siswa->nama }}> <br>
Alamat   <input type="text" name="alamat" value={{ $siswa->alamat }}> <br>
No.Hp    <input type="tel" name="no_hp" value={{ $siswa->no_hp }}> <br>
<input type="submit" value="submit"> <br>
  </pre>
</Form>
