@extends('layout.main')

@section('title', 'Edit data mahasiswa')
@section('content')
    <h1>Edit data mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

        @method('PUT')
        @csrf
        <div class="mv-3">
            <label for="" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim) }}">
            @error('nim')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="mv-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}">
            @error('nama')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-success mt-4">Update data</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger mt-4">Batalkan</a>
        </div>
@endsection