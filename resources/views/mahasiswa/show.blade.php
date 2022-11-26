@extends('layout.main')

@section('title', 'Detail data mahasiswa')
@section('content')
    <h1>Data Mahasiswa</h1>

    <table class="table-bordered">
        <tbody>
            <tr>
                <td width="50px">nim</td>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <td width="50px">nama</td>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-success mt-4">Kembali</a>
@endsection