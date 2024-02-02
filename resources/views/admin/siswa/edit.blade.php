<!-- resources/views/admin/siswa/edit.blade.php -->

@extends('adminlte::page')

@section('title', 'Edit Siswa')

@section('content_header')
    <h1>Edit Siswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" required>
                </div>
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa:</label>
                    <input type="text" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
                </div>
                <div class="form-group">
                    <label for="sekolah_id">Sekolah ID:</label>
                    <input type="text" name="sekolah_id" class="form-control" value="{{ $siswa->sekolah_id }}" required>
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran:</label>
                    <input type="text" name="mata_pelajaran" class="form-control" value="{{ $siswa->mata_pelajaran }}" required>
                </div>
                <div class="form-group">
                    <label for="kelas_id">Kelas ID:</label>
                    <input type="text" name="kelas_id" class="form-control" value="{{ $siswa->kelas_id }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@stop
