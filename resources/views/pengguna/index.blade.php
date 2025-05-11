@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Pengguna</h1>

    <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pengguna)
                <tr>
                    <td>{{ $pengguna->id }}</td>
                    <td>{{ $pengguna->name }}</td>
                    <td>{{ $pengguna->email }}</td>
                    <td>{{ ucfirst($pengguna->role) }}</td>
                    <td>
                        <a href="{{ route('pengguna.show', $pengguna->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('pengguna.edit', $pengguna->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($data->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pengguna.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
