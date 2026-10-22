@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    @if($errors->any())
        <x-alert type="error" message="Data belum lengkap atau tidak valid. Periksa kembali isian Anda." />
    @endif

    <form action="{{ route('laporan.kirim') }}" method="POST" class="card">
        @csrf

        <label for="nama">Nama Pelapor</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
        @error('nama') <span class="error">{{ $message }}</span> @enderror

        <label for="lokasi">Lokasi Kejadian</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
        @error('lokasi') <span class="error">{{ $message }}</span> @enderror

        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input type="number" id="tinggi" name="tinggi" value="{{ old('tinggi') }}" min="0">
        @error('tinggi') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Kirim Laporan</button>
    </form>
@endsection