<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat saat dijalankan ulang
        Project::truncate();

        // Proyek 1: Audit Mutu Internal
        Project::create([
            'title' => 'Audit Mutu Internal (AMI) UISI',
            'description' => 'Sistem informasi untuk mengevaluasi standar mutu akademik secara sistematis di lingkungan kampus UISI.',
            'tech_stack' => 'Laravel, ReactJS, MySQL, Tailwind CSS'
        ]);

        // Proyek 2: Travel-App
        Project::create([
            'title' => 'Travel-App (Open Trip)',
            'description' => 'Platform manajemen reservasi dan promosi paket wisata open trip untuk memudahkan koordinasi traveler.',
            'tech_stack' => 'Laravel, PHP, Bootstrap, MySQL'
        ]);

        // Proyek 3: Misidoc
        Project::create([
            'title' => 'Misidoc - Health Platform',
            'description' => 'Aplikasi layanan kesehatan digital yang menghubungkan pasien dengan dokter dan apotek secara efisien.',
            'tech_stack' => 'Laravel, PHP, JavaScript, MySQL'
        ]);

        // Proyek 4: Monitoring Tempat Sampah (IoT)
        Project::create([
            'title' => 'IoT Garbage Monitoring',
            'description' => 'Sistem pemantauan kapasitas tempat sampah secara real-time menggunakan Raspberry Pi Pico dan sensor ultrasonik.',
            'tech_stack' => 'IoT, Raspberry Pi Pico, C++, Sensor Ultrasonik'
        ]);
    }
}