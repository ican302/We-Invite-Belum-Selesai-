<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $invitation->title }}</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=DM+Serif+Display&display=swap"
        rel="stylesheet">

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        #modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        #navbar {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            width: 100%;
            max-width: 500px;
            height: 64px;
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }

        .px-4::-webkit-scrollbar {
            width: 5px;
        }

        .px-4::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb {
            background-color: #6b7280;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb:hover {
            background-color: #6b7280;
        }
    </style>
</head>

<body class="antialiased" style="overflow: hidden; background-color: rgb(180, 180, 180);">

    <!-- Sampul -->
    <section>
        <div id="cover-page"
            class="relative flex flex-col justify-between items-center min-h-screen mx-auto max-w-[500px] bg-cover bg-center"
            style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
               background-attachment: fixed;">
            <!-- Flash Message -->
            @if (session('success') || session('error'))
                <div id="flash-message"
                    class="absolute top-5 left-1/2 transform -translate-x-1/2 z-20 flex items-center p-4 text-sm shadow-lg rounded-lg w-[90%] max-w-[400px]"
                    style="background-color: rgba(255, 255, 255, 0.8); visibility: hidden;">
                    <i
                        class="{{ session('success') ? 'fas fa-check-circle text-green-800' : 'fas fa-exclamation-circle text-red-800' }} flex-shrink-0 inline w-4 h-4 mr-3"></i>
                    <span class="sr-only">{{ session('success') ? 'Success' : 'Error' }}</span>
                    <div class="text-sm {{ session('success') ? 'text-green-800' : 'text-red-800' }}">
                        {{ session('success') ?? session('error') }}
                    </div>
                </div>
            @endif
            <!-- Wrapper Konten -->
            <div class="flex flex-col justify-center py-5 space-y-5 flex-grow w-full">
                <!-- Judul -->
                <div class="text-start pl-5 z-10" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" data-aos-delay="500">
                    <div class="font-cormorant font-extrabold text-base tracking-[0.5em] uppercase">
                        The Wedding of
                    </div>
                    <div class="mt-1 font-dmSerifDisplay text-4xl">
                        @if ($invitation->mempelai)
                            {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                            &
                            {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                        @else
                            - & -
                        @endif
                    </div>
                </div>
                <!-- Foto Cover -->
                <div class="flex justify-end z-10" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" data-aos-delay="500">
                    <img src="{{ asset($fotoSampul ?? '') }}" alt="Cover Image"
                        class="rounded-tl-[100px] border-4 border-white shadow-xl max-w-[22rem] h-auto object-cover">
                </div>
                <!-- Nama Tamu -->
                <div class="text-start pl-5 z-10" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" data-aos-delay="500">
                    <div class="font-dmSerifDisplay">
                        <div>
                            Kepada Yth :
                        </div>
                        <div class="mt-1">
                            Bapak/Ibu/Saudara/i
                        </div>
                        <div class="rounded text-lg text-black mt-5 mb-1">
                            @if (isset($guestData) && !empty($guestData->nama_tamu))
                                {{ $guestData->nama_tamu }}
                            @else
                                -
                            @endif
                        </div>
                        <hr class="border-black">
                        <div>
                            <button type="button" onclick="openInvitation()"
                                class="text-white border py-2 px-6 mt-5 font-cormorant text-lg focus:outline-none focus:ring-2 focus:ring-[#000000] focus:ring-offset-1 transition duration-150"
                                style="background-color: #000000;">
                                <i class="fa-solid fa-envelope mr-1"></i>
                                Buka Undangan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mempelai -->
    <section id="main-invitation">
        <div class="relative flex flex-col justify-center items-start min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
            background-position: center; 
            background-size: cover; 
            background-attachment: fixed;">
            <!-- Mempelai Pria -->
            <div class="my-10 relative" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="relative z-10">
                    @if ($invitation->mempelai && $invitation->mempelai->foto_pria)
                        <img src="{{ asset($invitation->mempelai->foto_pria) }}" alt=""
                            class="w-64 h-64 object-cover rounded-tr-[100px] border-4 border-white shadow-xl">
                    @else
                        <p class="pl-5 mt-10 text-red-600 font-dmSerifDisplay">Anda belum mengisi data mempelai</p>
                    @endif
                </div>
                <div class="bg-white font-cormorant pt-5 pb-10 pl-5 mt-[-50px] w-[21rem] shadow-xl">
                    <h2 class="text-3xl font-extrabold mt-20">
                        {{ $invitation->mempelai ? $invitation->mempelai->nama_pria : '-' }}
                    </h2>
                    <p class="text-lg font-cormorant mt-3">
                        Putra ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_pria : '' }}
                    </p>
                    <p class="text-lg font-cormorant">
                        Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_pria : '' }}
                    </p>
                    <p class="text-lg font-cormorant">
                        &
                    </p>
                    <p class="text-lg font-cormorant mb-3">
                        Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_pria : '' }}
                    </p>
                    <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? $invitation->mempelai->instagram_link_pria : '#' }}"
                        target="_blank"
                        class="flex items-center justify-center gap-2 mt-5 py-[0.35rem] px-6 bg-black text-white font-cormorant shadow-xl focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150 w-fit
                        {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_pria ? 'pointer-events-none opacity-50' : '' }}">
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </a>
                </div>
            </div>
            <!-- Divider -->
            <div class="flex items-center justify-center text-center gap-4 w-full my-5" data-aos="zoom-in"
                data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="h-[1px] bg-black flex-1"></div>
                <div class="text-5xl font-cormorant font-semibold text-black mx-0 md:mx-2">
                    &
                </div>
                <div class="h-[1px] bg-black flex-1"></div>
            </div>
            <!-- Mempelai Wanita -->
            <div class="my-10 flex justify-end ml-auto" data-aos="fade-left" data-aos-easing="ease-in-sine"
                data-aos-duration="800">
                <div class="flex flex-col items-end">
                    <div class="relative z-10">
                        @if ($invitation->mempelai && $invitation->mempelai->foto_wanita)
                            <img src="{{ asset($invitation->mempelai->foto_wanita) }}" alt=""
                                class="w-64 h-64 object-cover rounded-tl-[100px] border-4 border-white shadow-xl">
                        @else
                            <p class="pl-5 mt-10 text-red-600 font-dmSerifDisplay">Anda belum mengisi data mempelai</p>
                        @endif
                    </div>
                    <div class="bg-white font-cormorant pt-5 pb-10 pr-5 mt-[-50px] w-[21rem] shadow-xl">
                        <h2 class="text-3xl font-extrabold mt-20 flex justify-end">
                            {{ $invitation->mempelai ? $invitation->mempelai->nama_wanita : '-' }}
                        </h2>
                        <p class="text-lg mt-3 flex justify-end">
                            Putri ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_wanita : '' }}
                        </p>
                        <p class="text-lg flex justify-end">
                            Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_wanita : '' }}
                        </p>
                        <p class="text-lg flex justify-end">
                            &
                        </p>
                        <p class="text-lg mb-3 flex justify-end">
                            Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_wanita : '' }}
                        </p>
                        <div class="flex justify-end mt-5">
                            <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? $invitation->mempelai->instagram_link_wanita : '#' }}"
                                target="_blank"
                                class="flex items-center gap-2 py-[0.35rem] px-6 bg-black text-white font-cormorant shadow-xl focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150 
                                {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_wanita ? 'pointer-events-none opacity-50' : '' }}">
                                <i class="fab fa-instagram"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Acara -->
    <section>
        <div class="relative flex flex-col justify-center items-center min-h-screen max-w-[500px] mx-auto"
            style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
            background-position: center; 
            background-size: cover; 
            background-attachment: fixed;">
            <!-- Countdown -->
            <div class="relative w-full my-10">
                <div class="flex items-center justify-center text-center gap-4 w-full my-5" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="h-[1px] bg-black flex-1"></div>
                    <div class="text-4xl text-black font-dmSerifDisplay mx-0 md:mx-2">
                        <span>Save</span>
                        <span>The</span>
                        <span>Date</span>
                    </div>
                    <div class="h-[1px] bg-black flex-1"></div>
                </div>
                <div id="countdown" class="text-center text-white flex justify-center space-x-5" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="bg-black/50 text-center border-b-[3px] border-black px-2 mt-5">
                        <span class="text-xl w-12 h-12 flex items-center justify-center days">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Hari
                        </span>
                    </div>
                    <div class="bg-black/50 text-center border-b-[3px] border-black px-2 mt-5">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center hours">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Jam
                        </span>
                    </div>
                    <div class="bg-black/50 text-center border-b-[3px] border-black px-2 mt-5">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center minutes">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Menit
                        </span>
                    </div>
                    <div class="bg-black/50 text-center border-b-[3px] border-black px-2 mt-5">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center seconds">
                            00
                        </span>
                        <span class="pb-3 flex items-center justify-center">
                            Detik
                        </span>
                    </div>
                </div>
            </div>
            <!-- Daftar Acara -->
            @if ($invitation->acara->isNotEmpty())
                <div class="bg-white relative w-full text-black flex">
                    <div class="mx-7 w-full z-10">
                        @foreach ($invitation->acara as $acara)
                            <div class="px-5 my-10 text-center" data-aos="fade-right" data-aos-easing="ease-in-sine"
                                data-aos-duration="800">
                                <h3 class="text-3xl font-dmSerifDisplay">
                                    {{ $acara->nama_acara }}
                                </h3>
                                <hr class="border-black mt-3">
                                <div class="mt-7 font-cormorant">
                                    <p class="text-lg">
                                        Hari/Tanggal :
                                    </p>
                                    <p class="text-center text-lg mt-1">
                                        @php
                                            \Carbon\Carbon::setLocale('id');
                                            $tanggalAcara = \Carbon\Carbon::parse($acara->tanggal_acara);
                                        @endphp
                                        {{ $tanggalAcara->translatedFormat('l') }},
                                        {{ $tanggalAcara->translatedFormat('d') }}
                                        {{ $tanggalAcara->translatedFormat('F') }}
                                        {{ $tanggalAcara->translatedFormat('Y') }}
                                    </p>
                                    <p class="text-lg mt-5">
                                        Waktu :
                                    </p>
                                    <p class="text-center text-lg mt-1">
                                        {{ \Carbon\Carbon::parse($acara->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($acara->jam_selesai)->format('H:i') }}
                                        {{ $acara->zona_waktu }}
                                    </p>
                                    <p class="text-lg mt-5">
                                        Tempat : {{ $acara->nama_tempat }}
                                    </p>
                                    <p class="text-center text-lg mt-1">
                                        {{ $acara->alamat_tempat }}
                                    </p>
                                    <div class="mt-7 flex justify-center">
                                        <a href="{{ $acara->link_google_maps }}" target="_blank"
                                            class="bg-black shadow-xl border text-white py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Google Maps</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <!-- Streaming -->
            @if ($invitation->streaming)
                <div class="relative z-10 w-full my-10 px-5 text-black">
                    <div class="bg-white shadow-xl p-10 mx-auto flex flex-col justify-center items-center relative w-full h-auto max-w-[370px]"
                        data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="mx-auto my-5">
                            <div class="grid grid-cols-1 gap-5 text-center items-center mx-auto max-w-lg lg:max-w-4xl">
                                <div class="text-3xl font-dmSerifDisplay text-nowrap">
                                    Live Streaming
                                </div>
                                <div class="text-lg font-cormorant font-light mt-2">
                                    Temui kami secara virtual untuk menyaksikan acara pernikahan kami melalui siaran
                                    langsung
                                </div>
                                <div class="mt-5">
                                    <a href="{{ $invitation->streaming->link_streaming }}" target="__blank"
                                        class="border py-2 px-6 bg-black text-white font-cormorant shadow-xl focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                        <i class="fa-solid fa-tv mr-[0.35rem]"></i>
                                        Tonton Streaming
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Galeri -->
    @if ($invitation->galeri && ($invitation->galeri->video_galeri || $invitation->galeri->foto_galeri))
        <section>
            <div
                class="bg-white text-black relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
                <div class="flex flex-col mt-10 mb-72 md:mb-52">
                    <!-- Judul -->
                    <div class="pb-10 px-5">
                        <div class="text-3xl uppercase font-dmSerifDisplay" data-aos="fade-down"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Gallery
                        </div>
                        <div class="text-3xl font-cormorant mt-2" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            OUR MOMENTS
                        </div>
                    </div>
                    <!-- Foto & Video -->
                    <div class="mx-5 bg-black" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <!-- Video -->
                        @if ($invitation->galeri->first() && $invitation->galeri->first()->video_galeri)
                            <div class="w-full px-5 pt-5">
                                <iframe class="w-full h-56" src="{{ $invitation->galeri->first()->video_galeri }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif
                        <!-- Foto Galeri -->
                        <div class="px-5">
                            <div class="grid grid-cols-2 gap-4 py-5">
                                @if ($invitation->galeri && !empty($invitation->galeri->foto_galeri))
                                    @foreach (json_decode($invitation->galeri->foto_galeri) as $foto)
                                        <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                            alt="" class="w-full aspect-square object-cover cursor-pointer"
                                            onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')">
                                    @endforeach
                                @else
                                    <p class="text-center text-white">Tidak ada foto galeri</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Quote -->
    @if ($invitation->quote)
        <section>
            <div class="text-black relative flex justify-center items-center w-full mx-auto max-w-[500px]">
                <div class="absolute z-10 text-center bg-white py-10 px-0 md:px-5 mx-5 mb-5 shadow-xl"
                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-lg px-5 md:px-10 font-cormorant">
                        {!! nl2br(e($invitation->quote->quote)) !!}
                    </div>
                    <div class="pt-5 font-semibold font-dmSerifDisplay text-lg text-[#000000]">
                        {{ $invitation->quote->author }}
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Cerita -->
    <section>
        <div class="text-black relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
            background-position: center; 
            background-size: cover; 
            background-attachment: fixed;">
            <!-- Konten -->
            <div class="flex flex-col">
                <div class="mt-72 md:mt-52 mb-10">
                    <!-- Judul -->
                    <div class="text-4xl uppercase font-dmSerifDisplay text-center mb-7" data-aos="fade-down"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Love Story
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4 mb-7" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-black flex-1"></div>
                        <div class="text-3xl text-black mx-0 md:mx-2">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="h-[1px] bg-black flex-1"></div>
                    </div>
                    <!-- Cerita -->
                    @if ($invitation->cerita->isNotEmpty())
                        @foreach ($invitation->cerita as $cerita)
                            <div class="my-5 mx-5">
                                <div class="bg-white shadow-xl" data-aos="fade-up" data-aos-easing="ease-in-sine"
                                    data-aos-duration="800">
                                    <div class="text-xl font-dmSerifDisplay p-4">
                                        {{ $cerita->judul_cerita }}
                                    </div>
                                    <div class="pb-4 px-4 text-lg font-cormorant">
                                        {{ $cerita->isi_cerita }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Wish & RSVP -->
    <section>
        <div
            class="bg-white text-black relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="flex flex-col my-24">
                <!-- Wish -->
                @if ($commentsEnabled)
                    <!-- Judul -->
                    <div class="text-center">
                        <h2 class="text-3xl font-dmSerifDisplay mb-5 mx-8" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Wedding Wish
                        </h2>
                        <p class="mb-10 mx-8 font-cormorant text-lg" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Berikan ucapan, harapan dan do'a kepada kedua mempelai
                        </p>
                    </div>
                    <!-- Form Wish -->
                    <form action="{{ route('comments.store', $invitation->id) }}" method="POST" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800" class="mx-8 mb-5">
                        @csrf
                        <div class="mb-4 w-full">
                            <label for="name" class="block font-medium font-dmSerifDisplay">
                                Nama:
                            </label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full border border-gray-500 py-2 px-3 text-sm font-dmSerifDisplay text-black"
                                placeholder="Nama Anda" required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-4 w-full">
                            <label for="message" class="block font-medium font-dmSerifDisplay">
                                Ucapan atau Doa:
                            </label>
                            <textarea id="message" name="message" rows="4"
                                class="mt-1 block w-full border border-gray-500 py-2 px-3 text-sm font-dmSerifDisplay text-black"
                                placeholder="Tulis ucapan atau doa Anda di sini..." required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="text-center text-sm">
                            <button type="submit"
                                class="text-white shadow-xl py-2 px-6 border border-gray-500 focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                style="background-color: #000000">
                                <span>Kirim</span>
                                <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Their Wish -->
                    <div class="px-4 mb-10 mt-5 mx-2"
                        style="max-height: 500px; overflow-y: auto; background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
                        background-position: center; 
                        background-size: cover; 
                        background-attachment: fixed;">
                        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            @foreach ($comments as $comment)
                                <div class="my-4 p-5 bg-white rounded-lg shadow-xl">
                                    <h4 class="uppercase font-dmSerifDisplay text-black">
                                        {{ $comment->name }}
                                    </h4>
                                    <p class="text-gray-600 font-cormorant text-lg pt-1">
                                        {{ $comment->message }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <!-- RSVP -->
                <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Judul RSVP -->
                    <h2 class="text-center text-3xl font-dmSerifDisplay mt-10 mb-5 mx-8">
                        RSVP
                    </h2>
                    <!-- Form -->
                    <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" class="mx-8">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block font-medium font-dmSerifDisplay">
                                Nama :
                            </label>
                            <input type="text" id="name" name="nama"
                                class="mt-1 block w-full border border-gray-500 py-2 px-3 text-sm font-dmSerifDisplay text-black"
                                placeholder="Nama Anda" required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block font-medium font-dmSerifDisplay">
                                Pesan :
                            </label>
                            <textarea id="message" name="pesan" rows="4"
                                class="mt-1 block w-full border border-gray-500 py-2 px-3 text-sm font-dmSerifDisplay text-black"
                                placeholder="Tulis pesan Anda di sini..." required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="relative inline-block w-full">
                                <label for="message" class="block font-medium font-dmSerifDisplay">
                                    Konfirmasi Kehadiran
                                </label>
                                <button id="dropdownButton"
                                    class="mt-1 block text-left font-dmSerifDisplay bg-white text-black w-full border border-gray-500 shadow-sm py-2 px-3 sm:text-sm"
                                    style="transition: 0.3s ease; outline: none;" onclick="toggleDropdown(event)">
                                    <span class="text-gray-500 font-dmSerifDisplay">. . .</span>
                                </button>
                                <ul id="dropdownMenu"
                                    class="hidden absolute z-10 w-full mt-[0.10rem] bg-white text-black border border-gray-500 shadow-lg">
                                    <li class="py-2 px-3 font-dmSerifDisplay cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Ya, Saya akan datang')">
                                        Ya, Saya akan datang
                                    </li>
                                    <li class="py-2 px-3 font-dmSerifDisplay cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                        Maaf, Saya tidak bisa datang
                                    </li>
                                    <li class="py-2 px-3 font-dmSerifDisplay cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                        Saya belum tahu bisa datang atau tidak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" id="konfirmasi_kehadiran" name="konfirmasi_kehadiran">
                        <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                        <div class="text-center text-sm">
                            <button type="submit"
                                class="text-white shadow-xl py-2 px-6 border border-gray-500 focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                style="background-color: black">
                                <span>Kirim</span>
                                <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Kado Digital -->
    @if ($invitation->kadodigital->isNotEmpty())
        <section>
            <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
                style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
            background-position: center; 
            background-size: cover; 
            background-attachment: fixed;">
                <div class="flex flex-col">
                    <div class="my-10 bg-white py-10 mx-5 shadow-xl" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Judul -->
                        <div class="text-center mb-9">
                            <div class="text-3xl uppercase font-dmSerifDisplay mb-5 mx-8">
                                Kado Digital
                            </div>
                            <div class="font-cormorant text-lg my-5 mx-8">
                                Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah
                                ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.
                            </div>
                        </div>
                        <!-- Divider -->
                        <div class="flex items-center justify-center text-center gap-4">
                            <div class="h-[1px] bg-black flex-1"></div>
                            <div class="text-2xl text-black mx-0 md:mx-2">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="h-[1px] bg-black flex-1"></div>
                        </div>
                        <!-- Rekening -->
                        @foreach ($invitation->kadodigital as $kado)
                            <div class="w-full text-center text-black mt-10">
                                <p class="font-cormorant text-lg mt-4">Bank :</p>
                                <p class="font-cormorant text-lg font-bold">{{ $kado->nama_bank }}</p>
                                <p class="mt-4 font-cormorant text-lg">Atas Nama :</p>
                                <p class="font-cormorant text-lg font-bold">{{ $kado->penerima }}</p>
                                <p class="mt-4 font-cormorant text-lg">Nomor Rekening :</p>
                                <p id="nomor_rekening_{{ $kado->id }}"
                                    class="font-cormorant text-lg font-bold mb-4">
                                    {{ $kado->no_rekening }}
                                </p>
                                <div class="mb-4 text-center">
                                    <button id="copyButton_{{ $kado->id }}" type="button"
                                        onclick="copyToClipboard({{ $kado->id }})"
                                        class="text-lg shadow-xl text-nowrap text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#000000] focus:ring-offset-2 transition ease-in-out duration-150 font-cormorant"
                                        style="background-color: #000000;">
                                        <span>Salin Nomor Rekening</span>
                                        <i class="fas fa-copy text-lg ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Penutup -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/minimalist/bg.png') }}'); 
        background-position: center; 
        background-size: cover; 
        background-attachment: fixed;">
        <!-- Konten -->
        <div class="flex flex-col text-center text-black bg-white py-10 px-5 mx-5 shadow-xl" data-aos="zoom-in"
            data-aos-easing="ease-in-sine" data-aos-duration="800">
            <div class="my-5">
                <!-- Teks Penutup -->
                <div>
                    <div class="font-cormorant text-lg">
                        {{ $invitation->tekspenutup->teks ??
                            'Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami' }}
                    </div>
                    <div class="font-dmSerifDisplay mt-5">
                        {{ $invitation->tekspenutup->salam ?? ' Wassalamu’alaikum Wr. Wb.' }}
                    </div>
                </div>
                <br><br>
                <!-- Teks -->
                <div>
                    <div class="font-cormorant text-lg">
                        Kami yang berbahagia
                    </div>
                    <div class="text-2xl font-bold mt-3 font-dmSerifDisplay">
                        @if ($invitation->mempelai)
                            {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                            &
                            {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                        @else
                            - & -
                        @endif
                    </div>
                    <div class="mt-10 font-cormorant text-lg">
                        <div class="mt-5">
                            Created with
                            <i class="fa-solid fa-heart"></i>
                            by
                            <a href="{{ route('home') }}" class="hover:underline" target="_blank">
                                WeInvite
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Foto -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-black/80 absolute inset-0"></div>
        <div class="relative p-1 w-full max-h-full">
            <div class="relative bg-white">
                <button type="button"
                    class="absolute top-2 right-2 text-white !bg-[#000000] !important text-sm w-7 h-7 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4">
                    <img id="modal-image" class="w-auto h-full mx-auto object-contain border-2 border-black"
                        src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#000000] bg-white py-3 px-4 rounded-full shadow-lg">
        <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        @if ($invitation->music)
            <iframe id="music-iframe" width="100%" height="160" scrolling="no" frameborder="no"
                allow="autoplay" hidden
                src="https://w.soundcloud.com/player/?url={{ urlencode($invitation->music->file_path) }}&color=%23ff5500&auto_play=true&hide_related=true&show_comments=false&show_user=false&show_reposts=false&visual=false&repeat=true">
            </iframe>
        @endif
    </button>

    <script>
        // Inisialisasi AOS
        AOS.init();

        // Flash Message
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessage = document.getElementById("flash-message");
            if (flashMessage) {
                flashMessage.style.visibility = "visible";

                gsap.fromTo(
                    flashMessage, {
                        opacity: 0,
                        y: -20,
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        ease: "power1.out",
                    }
                );

                setTimeout(function() {
                    gsap.to(flashMessage, {
                        opacity: 0,
                        y: 20,
                        duration: 0.5,
                        ease: "power1.in",
                        onComplete: function() {
                            flashMessage.style.visibility = "hidden";
                        }
                    });
                }, 5000);
            }
        });

        // Fungsi Buka Undangan
        function openInvitation() {
            document.body.style.overflowY = "auto";
            document.body.style.overflowX = "hidden";

            const invitation = document.getElementById("main-invitation");
            invitation.scrollIntoView({
                behavior: "smooth",
            });
        }

        // Inisialisasi Navbar saat Halaman Dimuat
        window.onload = function() {
            document.body.style.overflow = "hidden";
            const coverPage = document.getElementById("cover-page");
            coverPage.scrollIntoView({
                behavior: "smooth",
            });
        };

        // Fungsi Countdown
        document.addEventListener("DOMContentLoaded", function() {
            @if ($invitation->acara->isNotEmpty())
                const targetDate = new Date(
                    "{{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('Y-m-d H:i:s') }}").getTime();
            @else
                const targetDate = null;
            @endif

            if (targetDate) {
                const countdownInterval = setInterval(function() {
                    const now = new Date().getTime();

                    const distance = targetDate - now;

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.querySelector(".days").innerText = String(days).padStart(2, '0');
                    document.querySelector(".hours").innerText = String(hours).padStart(2, '0');
                    document.querySelector(".minutes").innerText = String(minutes).padStart(2, '0');
                    document.querySelector(".seconds").innerText = String(seconds).padStart(2, '0');

                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        document.getElementById("countdown").innerHTML =
                            "<h2 style='color:red;'>Acara Telah Dimulai!</h2>";
                    }
                }, 1000);
            } else {
                document.getElementById("countdown").innerHTML =
                    "<h2 style='color:#e02424; font-family: Montserrat, sans-serif;'>Anda belum mengisi data acara</h2>";
            }
        });

        // Fungsi Buka Modal
        function openModal(imageSrc) {
            const modalImage = document.getElementById("modal-image");
            modalImage.src = imageSrc;

            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            modal.classList.remove("hidden");

            gsap.fromTo(
                modalContent, {
                    scale: 0,
                    opacity: 0,
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.5,
                    ease: "back.out(1.7)",
                }
            );
        }

        // Fungsi Tutup Modal
        function closeModal() {
            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            gsap.to(modalContent, {
                scale: 0,
                opacity: 0,
                duration: 0.5,
                ease: "back.in(1.7)",
                onComplete: () => {
                    modal.classList.add("hidden");
                },
            });
        }

        // Fungsi Salin Nomor Rekening
        function copyToClipboard(id) {
            const rekeningText = document.getElementById("nomor_rekening_" + id).innerText;

            const tempTextArea = document.createElement("textarea");
            tempTextArea.value = rekeningText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);

            const button = document.getElementById("copyButton_" + id);
            button.innerHTML =
                '<span>Nomor Rekening Berhasil Disalin!</span> <i class="fas fa-check text-lg ml-1"></i>';

            setTimeout(() => {
                button.innerHTML =
                    '<span>Salin Nomor Rekening</span> <i class="fas fa-copy text-lg ml-1"></i>';
            }, 3000);
        }

        // Fungsi Toggle Dropdown
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Fungsi Pilih Opsi Dropdown
        function selectOption(option) {
            const dropdownButton = document.getElementById("dropdownButton");
            dropdownButton.textContent = option;
            document.getElementById("dropdownMenu").classList.add("hidden");

            const konfirmasiInput = document.getElementById("konfirmasi_kehadiran");
            if (option === 'Ya, Saya akan datang') {
                konfirmasiInput.value = 1;
            } else if (option === 'Maaf, Saya tidak bisa datang') {
                konfirmasiInput.value = 2;
            } else if (option === 'Saya belum tahu bisa datang atau tidak') {
                konfirmasiInput.value = 3;
            }
        }

        // Fungsi Tutup Dropdown Saat Mengklik Di Luar Dropdown
        document.addEventListener("click", function(event) {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });

        // Fungsi Pause & Play Music
        const musicControl = document.getElementById('music-control');
        const musicIframe = document.getElementById('music-iframe');
        const musicIcon = document.getElementById('music-icon');
        let isPlaying = true;

        function toggleMusic() {
            if (isPlaying) {
                musicIframe.contentWindow.postMessage('{"method":"pause"}', '*');
                musicIcon.classList.remove('fa-music');
                musicIcon.classList.add('fa-pause');
            } else {
                musicIframe.contentWindow.postMessage('{"method":"play"}', '*');
                musicIcon.classList.remove('fa-pause');
                musicIcon.classList.add('fa-music');
            }
            isPlaying = !isPlaying;
        }

        musicControl.addEventListener('click', toggleMusic);

        // Custom Form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const requiredInputs = Array.from(form.querySelectorAll('input[required]'));
                let firstInvalidInput = null;

                requiredInputs.forEach(input => {
                    input.setCustomValidity('');
                });

                for (const input of requiredInputs) {
                    if (!input.value.trim()) {
                        if (!firstInvalidInput) {
                            firstInvalidInput = input;
                        }
                        input.setCustomValidity('Kolom ini harus diisi.');
                    }
                }

                if (firstInvalidInput) {
                    firstInvalidInput.focus();
                    firstInvalidInput.reportValidity();
                    event.preventDefault();
                }
            });
        });
    </script>

</body>

</html>
