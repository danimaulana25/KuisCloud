@extends('layout.main')

@section('title', 'Semua data mahasiswa')
@section('content')
    <h1>Data Mahasiswa</h1>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-info mb-3">Tambah data mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}">Detail</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div>
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection