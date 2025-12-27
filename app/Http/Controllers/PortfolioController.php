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
            'title' => 'Internal Academic Quality Audit UISI',
            'description' => 'An information system to evaluate academic quality standards at UISI.',
            'details' => 'Responsible for developing the assessment module, integrating databases between legacy and new systems, and ensuring audit data security using standard encryption.',
            'tech' => ['Laravel', 'ReactJS', 'MySQL', 'SDLC', 'Prototyping'],
            'image' => 'AMI.jpeg'
        ],
        [
            'title' => 'Travel-App (Trip Gresia)',
            'description' => 'A reservation management platform for tour package service providers.',
            'details' => 'Built an automated quota management feature, real-time booking system, and an admin dashboard to monitor payment status and passenger manifests.',
            'tech' => ['Laravel', 'PHP', 'Tailwind'],
            'image' => 'TRAVELAPP.jpeg'
        ],
        [
            'title' => 'Misidoc - Digital Health',
            'description' => 'A healthcare application connecting patients with medical facilities.',
            'details' => 'Developed a doctor search interface based on specialization and nearest location, as well as a secure digital medical record history feature for users.',
            'tech' => ['Laravel', 'MySQL', 'Bootsrap'],
            'image' => 'MISIDOC.jpeg'
        ],
        [
            'title' => 'IoT Waste Bin Monitoring',
            'description' => 'An IoT-based smart system for monitoring waste volume.',
            'details' => 'Integrated hardware using HC-SR04 ultrasonic sensors and Raspberry Pi Pico to send volume data to a web dashboard periodically via HTTP protocol.',
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