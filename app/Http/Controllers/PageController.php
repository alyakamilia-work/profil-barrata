<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Fungsi untuk menampilkan halaman Home
    public function home()
    {
        return view('home'); // Ini akan memanggil file 'resources/views/home.blade.php'
    }

    // Fungsi untuk menampilkan halaman About Us
    public function about()
    {
        return view('about'); // Memanggil 'about.blade.php'
    }

    // Fungsi untuk menampilkan halaman Services
    public function services()
    {
        return view('services'); // Memanggil 'services.blade.php'
    }
    // Fungsi untuk menampilkan halaman Portfolio
public function portfolio()
{
    return view('portfolio'); // Ini akan memanggil file 'resources/views/portfolio.blade.php'
}

    // Fungsi untuk menampilkan halaman Contact
    public function contact()
    {
        return view('contact'); // Memanggil 'contact.blade.php'
    }
    public function sendContactMessage(Request $request)
{
    // Untuk saat ini, kita hanya akan menampilkan data yang dikirim
    // dd($request->all());

    // Langkah selanjutnya yang lebih baik:
    // 1. Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    // 2. Logika untuk mengirim email akan ditambahkan di sini nanti

    // 3. Kembali ke halaman kontak dengan pesan sukses
    return redirect()->route('contact')->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim.');
}
}