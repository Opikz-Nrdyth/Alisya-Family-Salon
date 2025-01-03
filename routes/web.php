<?php

use App\Http\Controllers\Service;
use App\Http\Controllers\Welcome;
use App\View\Components\Navbar;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Welcome::class, 'welcome'])->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/services', [Service::class, 'service'])->name('services');

// Route::get('/porthofolio', function () {
//     $portofolio = [
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//         [
//             'image' => 'https://placehold.co/400x400',
//             'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
//         ],
//     ];
//     return view('portofolio', ['portofolio' => $portofolio]);
// })->name('portofolio');

Route::get('/testimonials', function () {
    $testimonials = [
        [
            'message' => 'Puass bgt aku nyalon disini, Rambut singaku di sulap dg smoothing jepang. Asli keren, Murah, puas bgt sm pelayanan nya, ownernya Luar biasa Ramah.',
            'user' => [
                'name' => 'Fitriana Rahman',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Bagus, tempatnya nyaman walaupun gak terlalu besar. Owner ramah banget dan mau turun tangan langsung. Recommended.',
            'user' => [
                'name' => 'Ari Nurarofah',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'bagussssss potongggan rambutnyaaa.',
            'user' => [
                'name' => 'Tia',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Pokoknya recommended, kakaknya ramah-ramah, best service, hair cutnya sesuai sama yang diminta. Sukses selalu kak.',
            'user' => [
                'name' => 'Eca Adisti Muhva',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Setelah pindah2 salon utk mewarnai rambut akhirnya nemu salon yg hasilnya sesuai dan harga bersahabat dikantong..terimakasih alisya salon jd langganan dechh.',
            'user' => [
                'name' => 'Sapto Hendra',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Selalu puas dan amaze colouring disini. No pricy tapi hasil gak kalah sama salon2 di mall. Tengkyuu mb bella luvv.',
            'user' => [
                'name' => 'Maria Etik',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Asli sih... selalu sukak sama hasilnya tiap kesana... ownernya ramah... pegawai nya juga seru.. pokoknya nyaman banget...',
            'user' => [
                'name' => 'Abimanyu Putra Wijaya',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Pelayanan baik cepat dan ramah, sesuai request model rambut yg kita mau. Lancar dan sukses teruss alisya family salon.',
            'user' => [
                'name' => 'Pradika Shopee',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Hasilnya sangat memuaskan sekalii, tempatnya nyaman, dan pelayanannya ramah.',
            'user' => [
                'name' => 'Cindy Aulia Wardani',
                'profile' => 'https://placehold.co/250x250'
            ]
        ],
        [
            'message' => 'Tempat kecil tapi nyaman mbaknya juga diajak sharing enak pelayanan bagus warna colouring bagus.',
            'user' => [
                'name' => 'Annisa Waskitha',
                'profile' => 'https://placehold.co/250x250'
            ]
        ]
    ];


    return view('testimonials', ['testimonials' => $testimonials]);
})->name('testimonials');

// Route::get('/contact', function () {
//     return view('contact', ['query' => 'universitas negri yogyakarta']);
// })->name('contact');

Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');


// Fungsi Klik Booking
Route::get('/check-auth', function () {
    if (Filament::auth()->check()) {
        return response()->json(['auth' => true, 'user' => auth()->user()]);
    } else {
        return response()->json(['auth' => false, 'user' => null]);
    }
})->name('check-auth');

Route::post('/booking', function () {
    if (Filament::auth()->check()) {
        return response()->json(['status' => "success", 'message' => 'Booking berhasil dilakukan']);
    } else {
        return response()->json(['status' => "error", 'message' => 'Anda Belum Login']);
    }
})->name('booking');

Route::get('/logout', [Navbar::class, 'logout'])->name('logout');
