<a href="{{ URL::to('siswa') }}">Lihat Semua</a> | <a href="{{ URL::to('siswa/create') }}">Tambah Siswa</a>
<h1>Menampilkan data {{ $siswa->nama }}</h1>
<div>
    <h2>{{ $siswa->nama }}</h2>
    <p>
        <strong>Alamat : </strong> {{ $siswa->alamat }} <br>
        <strong>No Hp  : </strong> {{ $siswa->no_hp }} <br>
    </p>
</div>

