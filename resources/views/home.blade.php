@extends('master.master')

@section('title', 'Beranda - NusaData')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Selamat Datang di NusaData</h1>
        <p class="lead">Aplikasi pendataan warga untuk kemudahan administrasi desa.</p>

        <a href="{{ route('pengguna.index') }}" class="btn btn-primary mt-3">Kelola Data Pengguna</a>
    </div>
@endsection