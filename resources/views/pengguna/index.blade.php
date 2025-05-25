@extends('master.master')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Pengguna</h1>

        <form action="{{ route('pengguna.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="warga">Warga</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>

        <hr>

        <h2 class="mt-4">Daftar Pengguna</h2>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penggunas as $pengguna)
                    <tr>
                        <td>{{ $pengguna->nama }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>{{ $pengguna->role }}</td>
                        <td>
                            <a href="{{ route('pengguna.show', $pengguna->id) }}" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection