@extends('layouts.app')

@section('content')
    <h1>Detail Pengguna</h1>
    <p><strong>ID:</strong> {{ $pengguna->id }}</p>
    <p><strong>Nama:</strong> {{ $pengguna->nama }}</p>
    <p><strong>Email:</strong> {{ $pengguna->email }}</p>
    <a href="{{ route('pengguna.index') }}">Kembali</a>
@endsection