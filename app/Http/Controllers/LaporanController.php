<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Data contoh (prototipe tanpa database)
    private function dataLaporan(): array
    {
        return [
            ['id' => 1, 'nama' => 'Budi Santoso',  'lokasi' => 'Dayeuhkolot, Kab. Bandung', 'tinggi' => 25, 'waktu' => '2026-10-20 07:15'],
            ['id' => 2, 'nama' => 'Siti Aminah',   'lokasi' => 'Baleendah, Kab. Bandung',   'tinggi' => 55, 'waktu' => '2026-10-20 09:40'],
            ['id' => 3, 'nama' => 'Asep Sunandar', 'lokasi' => 'Bojongsoang, Kab. Bandung', 'tinggi' => 85, 'waktu' => '2026-10-21 05:30'],
            ['id' => 4, 'nama' => 'Rina Marlina',  'lokasi' => 'Rancaekek, Kab. Bandung',   'tinggi' => 30, 'waktu' => '2026-10-21 11:05'],
        ];
    }

    public function form()
    {
        return view('laporan.form');
    }

    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|integer|min:0|max:500',
        ]);

        // Tanpa database: data dikirim lewat flash session ke halaman konfirmasi
        return redirect()->route('laporan.konfirmasi')->with('laporan', $data);
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        // Jika halaman dibuka langsung tanpa mengirim form
        if (!$laporan) {
            return redirect()->route('laporan.form');
        }

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = $this->dataLaporan();

        return view('laporan.index', compact('laporan'));
    }
}