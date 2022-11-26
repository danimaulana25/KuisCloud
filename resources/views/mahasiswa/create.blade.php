@extends('layout.main')

@section('title', 'Tambah data mahasiswa')
@section('content')
    <h1>Tambah data mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mv-3">
            <label for="" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control">
            @error('nim')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="mv-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
            @error('nama')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-success mt-4">Tambah data</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger mt-4">Batalkan</a>
        </div>
    </form>
@endsection