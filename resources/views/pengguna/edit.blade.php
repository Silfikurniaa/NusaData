@extends('layouts.app')

@section('content')
    <h1>Edit Pengguna</h1>
    <form action="{{ route('pengguna.update', $pengguna) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pengguna->nama }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $pengguna->email }}" required><br>

        <button type="submit">Update</button>
    </form>
@endsection