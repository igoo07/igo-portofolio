<?php

namespace App\Http\Controllers;

use App\Models\Project; // Penting untuk memanggil Model Project
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Halaman Home
    public function index()
    {
        return view('home');
    }

    // Halaman Tentang Saya
    public function about()
{
    // Pastikan tidak ada kodingan aneh di sini
    return view('about');
}

    // Halaman Pengalaman Kerja
    public function experience()
    {
        return view('experience');
    }

    public function projects()
{
    $projects = [
        [
            'title' => 'Audit Mutu Internal Bidang Akademik UISI',
            'description' => 'Sistem informasi untuk mengevaluasi standar mutu bidang akademik di UISI.',
            'details' => 'Bertanggung jawab dalam pengembangan modul penilaian, integrasi database antara sistem lama dan baru, serta memastikan keamanan data hasil audit menggunakan enkripsi standar.',
            'tech' => ['Laravel', 'ReactJS', 'MySQL', 'SDLC', 'Prototyping'],
            'image' => 'AMI.jpeg' // Simpan gambar ini di public/images/
        ],
        [
            'title' => 'Travel-App (Trip Gresia)',
            'description' => 'Platform manajemen reservasi untuk penyedia jasa paket wisata.',
            'details' => 'Membangun fitur manajemen kuota otomatis, sistem booking real-time, dan dashboard admin untuk memantau status pembayaran serta manifes penumpang.',
            'tech' => ['Laravel', 'PHP', 'Tailwind'],
            'image' => 'TRAVELAPP.jpeg'
        ],
        [
            'title' => 'Misidoc - Digital Health',
            'description' => 'Aplikasi kesehatan untuk menghubungkan pasien dengan fasilitas medis.',
            'details' => 'Mengembangkan antarmuka pencarian dokter berdasarkan spesialisasi dan lokasi terdekat, serta fitur riwayat rekam medis digital yang aman bagi pengguna.',
            'tech' => ['Laravel', 'MySQL', 'Bootsrap'],
            'image' => 'MISIDOC.jpeg'
        ],
        [
            'title' => 'IoT Monitoring Tempat Sampah',
            'description' => 'Sistem pintar pemantau volume sampah berbasis IoT.',
            'details' => 'Integrasi perangkat keras menggunakan sensor ultrasonik HC-SR04 dan Raspberry Pi Pico untuk mengirimkan data volume ke dashboard web secara berkala melalui protokol HTTP.',
            'tech' => ['IoT', 'Raspberry Pi Pico', 'Thonny', 'Web'],
            'image' => 'IOT.jpeg'
        ],
    ];

    return view('projects', compact('projects'));
}
    // Halaman Kontak
    public function contact()
    {
        return view('contact');
    }

}