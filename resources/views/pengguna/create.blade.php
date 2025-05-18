@extends('layouts.app')

@section('content')
    <h1>Tambah Pengguna</h1>
    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Simpan</button>
    </form>
@endsection