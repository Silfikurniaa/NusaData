<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller

    {
        public function index()
        {
            $penggunas = Pengguna::all();
            return view('pengguna.index', compact('penggunas'));
        }
    
        public function create()
        {
            return view('home');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:pengguna,email',
                'password' => 'required|min:6',
                'role' => 'required|string',
            ]);
    
            Pengguna::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
    
            return redirect()->route('login')->with('success', 'Redirect sukses!');
        }
    
        public function show(Pengguna $pengguna)
        {
            return view('pengguna.show', compact('pengguna'));
        }
    
        public function edit(Pengguna $pengguna)
        {
            return view('pengguna.edit', compact('pengguna'));
        }
    
        public function update(Request $request, Pengguna $pengguna)
        {
            $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'role' => 'required',
            ]);
    
            $pengguna->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
            ]);
    
            return redirect()->route('pengguna.index');
        }
    
        public function destroy(Pengguna $pengguna)
        {
            $pengguna->delete();
            return redirect()->route('pengguna.index');
        }
    }
    