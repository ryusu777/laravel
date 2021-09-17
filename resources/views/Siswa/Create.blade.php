<?php use Illuminate\Support\Facades\Form; ?>
<a href="{{ URL::to('siswa') }}">Lihat Semua</a> | <a href="{{ URL::to('siswa/create') }}">Tambah Siswa</a>
<h1>Tambah Siswa</h1>

<Form method="POST" action="{{ URL::to('siswa') }}">
  @csrf
  <pre>
Nama     <input type="text" name="nama" > <br>
Alamat   <input type="text" name="alamat"> <br>
No.Hp    <input type="tel" name="no_hp"> <br>
<input type="submit" value="submit"> <br>
  </pre>
</Form>