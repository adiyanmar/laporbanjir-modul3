@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim. Terima kasih!" />

    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $laporan['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $laporan['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    </div>

    <p><a href="{{ route('laporan.form') }}">Buat laporan baru</a> | <a href="{{ route('laporan.index') }}">Lihat daftar laporan</a></p>
@endsection