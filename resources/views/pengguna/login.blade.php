@extends('master.master') {{-- diasumsikan file layout di atas bernama layouts/app.blade.php --}}

@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow rounded-4 p-4" style="max-width: 400px; width: 100%; background-color: #ffffff;">
            <h2 class="text-center fw-bold mb-2" style="color: #f97316;">NusaData</h2>
            <p class="text-center text-muted mb-4">Login untuk akses data kependudukanmu 🔍</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>


                <button type="submit" class="btn w-100 text-white" style="background-color: #f97316;">
                    Masuk
                </button>
            </form>

            <p class="text-center mt-3 text-muted">
                Hubungi admin untuk pendaftaran akun
            </p>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
@endsection