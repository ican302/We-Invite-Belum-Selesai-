<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\StreamingController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\KadoDigitalController;

// Route untuk halaman beranda
Route::get('/', [ThemeController::class, 'index'])->name('home');

// Route yang memerlukan autentikasi dan verifikasi
Route::middleware(['auth', 'verified'])->group(function () {
    // Route untuk menampilkan dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route untuk mengedit profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route untuk memperbarui profil pengguna
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route untuk menghapus profil pengguna
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route yang memerlukan autentikasi dengan peran sebagai admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route untuk menampilkan dashboard admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Route untuk mengelola tema oleh admin
    Route::get('/admin/tema', [AdminController::class, 'tema'])->name('admin.tema');
    // Route untuk halaman customer service oleh admin
    Route::get('/admin/cs', [AdminController::class, 'cs'])->name('admin.cs');
});

// Route yang memerlukan autentikasi dengan peran sebagai pengguna
Route::middleware(['auth', 'role:user'])->group(function () {
    // Route untuk menampilkan dashboard pengguna
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    // Route untuk mengelola undangan pengguna
    Route::get('/user/undangan', [UserController::class, 'undangan'])->name('user.undangan');
    // Route untuk menyimpan undangan
    Route::post('/user/undangan', [InvitationController::class, 'storeInvitation'])->name('user.store.invitation');
    // Route untuk mengedit undangan tertentu
    Route::get('/user/invitation/{invitation}/edit', [InvitationController::class, 'editInvitation'])->name('user.invitation.edit');
    // Route untuk memperbarui undangan
    Route::patch('/user/invitation/{invitation}', [InvitationController::class, 'updateInvitation'])->name('user.invitation.update');
    // Route untuk menghapus undangan
    Route::delete('/user/invitation/{invitation}', [InvitationController::class, 'destroyInvitation'])->name('user.invitation.destroy');
    // Route untuk menampilkan undangan berdasarkan slug
    Route::get('/invitation/{slug}', [InvitationController::class, 'show'])->name('user.invitation.show');
    // Route untuk halaman customer service pengguna
    Route::get('/user/cs', [UserController::class, 'cs'])->name('user.cs');

    // Routes untuk mengelola data mempelai
    Route::post('/user/mempelai/{invitation}', [MempelaiController::class, 'store'])->name('user.mempelai.store');
    Route::patch('/user/mempelai/{mempelai}', [MempelaiController::class, 'update'])->name('user.mempelai.update');
    Route::delete('/user/mempelai/{mempelai}', [MempelaiController::class, 'destroy'])->name('user.mempelai.destroy');

    // Routes untuk mengelola acara
    Route::post('/user/acara/{invitation}', [AcaraController::class, 'store'])->name('user.acara.store');
    Route::patch('/user/acara/{acara}', [AcaraController::class, 'update'])->name('user.acara.update');
    Route::delete('/user/acara/{acara}', [AcaraController::class, 'destroy'])->name('user.acara.destroy');

    // Routes untuk mengelola streaming
    Route::post('/user/streaming/{invitation}', [StreamingController::class, 'store'])->name('user.streaming.store');
    Route::delete('/user/streaming/{streaming}', [StreamingController::class, 'destroy'])->name('user.streaming.destroy');

    // Routes untuk mengelola galeri
    Route::post('/user/invitation/{invitation}/galeri', [GaleriController::class, 'store'])->name('user.galeri.store');
    Route::post('/user/invitation/{invitation}/galeri/multiple', [GaleriController::class, 'storeMultiple'])->name('user.galeri.storeMultiple');
    Route::post('/user/invitation/{invitation}/galeri/video', [GaleriController::class, 'storeVideo'])->name('user.galeri.storeVideo');
    Route::delete('/user/galeri/{galeri}/foto-sampul', [GaleriController::class, 'destroyCoverPhoto'])->name('user.galeri.destroyCoverPhoto');
    Route::delete('/user/galeri/{galeri}/foto-galeri', [GaleriController::class, 'destroyGalleryPhoto'])->name('user.galeri.destroyGalleryPhoto');
    Route::delete('/user/galeri/{galeri}/video', [GaleriController::class, 'destroyVideo'])->name('user.galeri.destroyVideo');

    // Routes untuk mengelola cerita
    Route::post('/invitation/{invitation}/cerita', [CeritaController::class, 'store'])->name('cerita.store');
    Route::patch('/user/cerita/{cerita}', [CeritaController::class, 'update'])->name('user.cerita.update');
    Route::delete('/user/cerita/{cerita}', [CeritaController::class, 'destroy'])->name('user.cerita.destroy');

    // Routes untuk mengelola kutipan
    Route::post('/user/quotes/{invitation}', [QuoteController::class, 'store'])->name('user.quotes.store');
    Route::delete('/user/quotes/{quotes}', [QuoteController::class, 'destroy'])->name('user.quotes.destroy');

    // Routes untuk mengelola kado digital
    Route::post('/user/kado-digital/{invitation}', [KadoDigitalController::class, 'store'])->name('user.kadodigital.store');
    Route::patch('/user/kado-digital/{kadodigital}', [KadoDigitalController::class, 'update'])->name('user.kadodigital.update');
    Route::delete('/user/kado-digital/{kadodigital}', [KadoDigitalController::class, 'destroy'])->name('user.kadodigital.destroy');

    // Routes untuk mengelola musik
    Route::post('/user/music/{invitation}', [MusicController::class, 'store'])->name('user.music.store');
    Route::delete('/user/music/{music}', [MusicController::class, 'destroy'])->name('user.music.destroy');

    // Routes untuk mengelola tamu
    Route::post('/user/invitation/{invitation}/tamu', [TamuController::class, 'store'])->name('user.tamu.store');
    Route::patch('/user/tamu/{tamu}', [TamuController::class, 'update'])->name('user.tamu.update');
    Route::delete('/user/tamu/{tamu}', [TamuController::class, 'destroy'])->name('user.tamu.destroy');

    // Route untuk menampilkan undangan untuk tamu tertentu
    Route::get('/invitation/{slug}/{guestName}', [InvitationController::class, 'showForGuest'])->name('invitation.show.guest');

    // Routes untuk mengelola komentar
    Route::patch('/comments/toggle-status/{invitation}', [CommentController::class, 'toggleStatus'])->name('comments.toggleStatus');
    Route::post('/comments/{invitation}', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// Route untuk menampilkan undangan berdasarkan slug dan nama tamu
Route::get('/undangan/{slug}/{guest}', [InvitationController::class, 'show'])->name('invitation.show');

// Route untuk resource tema (CRUD pada tema)
Route::resource('themes', ThemeController::class);

// Route untuk demo tema berdasarkan slug
Route::get('/demo/{slug}', [ThemeController::class, 'demo'])->name('demo.theme');

// Routes untuk autentikasi
require __DIR__ . '/auth.php';
