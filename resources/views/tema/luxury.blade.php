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
        .btn-grad {
            background-image: linear-gradient(to right, #835c3d 0%, #a78664 51%, #835c3d 100%);
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            border-radius: 8px;
        }

        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }

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
            background-color: #D9BF9D;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb:hover {
            background-color: #D9BF9D;
        }
    </style>
</head>

<body class="antialiased" style="background-color: #303030; overflow: hidden;">

    <div class="min-h-screen mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/luxury/bg.jpg') }}'); 
           background-position: center; 
           background-size: contain; 
           background-attachment: fixed;">

        <!-- Sampul -->
        <section>
            <div id="cover-page"
                class="relative flex flex-col justify-between items-center min-h-screen mx-auto max-w-[500px]"
                style="background-image: url('{{ asset($fotoSampul ?? '') }}'); background-position: center; background-size: cover;">
                <!-- Filter -->
                <div class="absolute inset-0 bg-black/50"></div>
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
                <!-- Judul -->
                <div class="text-center mt-16 z-10 text-white text-3xl">
                    <div class="flex flex-col items-center">
                        <!-- Divider -->
                        <img src="{{ asset('tema/luxury/layer-1.png') }}" alt="Layer 1" class="w-40 mb-4"
                            data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="mt-1 font-cormorant font-semibold uppercase" data-aos="fade-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            @if ($invitation->mempelai)
                                {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                                &
                                {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                            @else
                                - & -
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Nama Tamu -->
                <div class="text-center mb-16 z-10">
                    <div class="text-white font-poppins">
                        <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="text-sm">
                                Kepada Yth :
                            </div>
                            <div class="text-sm mt-1">
                                Bapak/Ibu/Saudara/i
                            </div>
                        </div>
                        <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="rounded text-lg font-croissant mt-5 mb-1">
                                @if (isset($guestData) && !empty($guestData->nama_tamu))
                                    {{ $guestData->nama_tamu }}
                                @else
                                    -
                                @endif
                            </div>
                            <hr>
                        </div>
                        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800"
                            data-aos-delay="500">
                            <button type="button" onclick="openInvitation()"
                                class="btn-grad text-white rounded-md py-2 px-6 mt-5 font-cormorant text-lg">
                                <i class="fa-solid fa-envelope mr-2"></i>
                                <span class="font-cormorantGaramond font-semibold">
                                    Buka Undangan
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pembuka -->
        <section id="main-invitation">
            <div
                class="relative border- flex flex-col py-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                <!-- Teks -->
                <div class="text-3xl md:text-4xl text-center" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="font-pinyon">
                        The Wedding of
                    </div>
                    <div class="font-cormorant font-semibold uppercase mt-2">
                        @if ($invitation->mempelai)
                            {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                            &
                            {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                        @else
                            - & -
                        @endif
                    </div>
                </div>
                <!-- Tanggal Acara -->
                <div class="pt-8 text-center">
                    <div class="relative mb-4" data-aos="fade-right" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <div class="w-16 mx-auto border-t-2 border-[#D9BF9D]"></div>
                    </div>
                    <div class="text-2xl md:text-3xl font-cormorant font-semibold" data-aos="zoom-in"
                        data-aos-duration="800">
                        @if ($tanggalAcara)
                            {{ \Carbon\Carbon::parse($tanggalAcara)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}
                        @else
                            -
                        @endif
                    </div>
                    <div class="relative mt-4" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <div class="w-16 mx-auto border-t-2 border-[#D9BF9D]"></div>
                    </div>
                </div>
                <!-- Quote -->
                @if ($invitation->quote)
                    <div class="text-center pt-16">
                        <div class="text-sm px-10 font-poppins" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            {!! nl2br(e($invitation->quote->quote)) !!}
                        </div>
                        <div class="pt-5 font-croissant text-[#D9BF9D]" data-aos="fade-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            {{ $invitation->quote->author }}
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <!-- Mempelai -->
        <section>
            <div
                class="relative flex flex-col pb-20 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                <!-- Teks Pembuka -->
                <div class="text-center px-10">
                    <div class="text-sm">
                        <div class="font-croissant text-lg text-[#D9BF9D]" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            {{ $invitation->tekspembuka->salam ?? 'Assalamu’alaikum Wr. Wb.' }}
                        </div>
                        <div class="font-poppins text-sm mt-2" data-aos="fade-left" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            {{ $invitation->tekspembuka->teks ?? 'Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, Insya Allah kami akan menyelenggarakan acara pernikahan :' }}
                        </div>
                    </div>
                </div>
                <!-- Mempelai Pria -->
                <div class="mt-8 mb-10 text-center">
                    <!-- Foto -->
                    @if ($invitation->mempelai && $invitation->mempelai->foto_pria)
                        <img src="{{ asset($invitation->mempelai->foto_pria) }}" alt=""
                            class="w-52 h-72 object-cover rounded-full mx-auto border-[3px] border-[#D9BF9D]"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @else
                        <p class="my-10 text-red-600 font-poppins" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">Anda belum mengisi data mempelai</p>
                    @endif
                    <!-- Divider -->
                    <img src="{{ asset('tema/luxury/layer-6.png') }}" alt="Layer 6"
                        class="w-full -mt-[0.7rem] max-w-60 mx-auto" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Data Mempelai -->
                    <div class="text-sm font-poppins" data-aos="fade-right" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <h2 class="text-xl font-croissant text-[#D9BF9D] mt-5">
                            {{ $invitation->mempelai ? $invitation->mempelai->nama_pria : '-' }}
                        </h2>
                        <p class="mt-3 text-white">
                            Putra ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_pria : '' }}
                        </p>
                        <p class="text-white">
                            Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_pria : '' }}
                        </p>
                        <p class="text-white">
                            &amp;
                        </p>
                        <p class="mb-3 text-white">
                            Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_pria : '' }}
                        </p>
                    </div>
                    <!-- Instagram -->
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? $invitation->mempelai->instagram_link_pria : '#' }}"
                            target="_blank"
                            class="btn-grad font-cormorantGaramond w-40 flex items-center rounded-md justify-center gap-2 mt-5 py-2 px-6 mx-auto 
                            {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_pria ? 'pointer-events-none opacity-50' : '' }}">
                            <i class="fab fa-instagram"></i>
                            <span class="font-cormorantGaramond text-lg font-semibold">Instagram</span>
                        </a>
                    </div>
                </div>
                <!-- Mempelai Wanita -->
                <div class="mt-8 text-center">
                    <!-- Foto -->
                    @if ($invitation->mempelai && $invitation->mempelai->foto_wanita)
                        <img src="{{ asset($invitation->mempelai->foto_wanita) }}" alt=""
                            class="w-52 h-72 object-cover rounded-full mx-auto border-[3px] border-[#D9BF9D]"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @else
                        <p class="my-10 text-red-600 font-poppins" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">Anda belum mengisi data mempelai</p>
                    @endif
                    <!-- Divider -->
                    <img src="{{ asset('tema/luxury/layer-6.png') }}" alt="Layer 6"
                        class="w-full -mt-[0.7rem] max-w-60 mx-auto" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Data Mempelai -->
                    <div class="text-sm font-poppins" data-aos="fade-right" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <h2 class="text-xl font-croissant text-[#D9BF9D] mt-5">
                            {{ $invitation->mempelai ? $invitation->mempelai->nama_wanita : '-' }}
                        </h2>
                        <p class="mt-3 text-white">
                            Putra ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_wanita : '' }}
                        </p>
                        <p class="text-white">
                            Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_wanita : '' }}
                        </p>
                        <p class="text-white">
                            &amp;
                        </p>
                        <p class="mb-3 text-white">
                            Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_wanita : '' }}
                        </p>
                    </div>
                    <!-- Instagram -->
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? $invitation->mempelai->instagram_link_wanita : '#' }}"
                            target="_blank"
                            class="btn-grad w-40 flex items-center rounded-md justify-center gap-2 mt-5 py-2 px-6 mx-auto 
                            {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_wanita ? 'pointer-events-none opacity-50' : '' }}">
                            <i class="fab fa-instagram"></i>
                            <span class="font-cormorantGaramond text-lg font-semibold">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Acara -->
        <section>
            <div
                class="relative flex flex-col px-5 py-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                <!-- Countdown -->
                <div class="w-full font-cormorant" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div
                        class="text-[#D9BF9D] text-4xl text-center font-cormorantGaramond mb-5 flex justify-center space-x-3 italic">
                        <span>Save</span>
                        <span>The</span>
                        <span>Date</span>
                    </div>
                    <div id="countdown" class="text-center text-white flex justify-center space-x-10">
                        <div class="text-center">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center days">
                                00
                            </span>
                            <span>
                                Hari
                            </span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center hours">
                                00
                            </span>
                            <span>
                                Jam
                            </span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center minutes">
                                00
                            </span>
                            <span>
                                Menit
                            </span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center seconds">
                                00
                            </span>
                            <span>
                                Detik
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <img src="{{ asset('tema/luxury/layer-5.png') }}" alt="Layer 6"
                    class="w-full mt-5 mb-10 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl"
                    data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                <!-- Konten -->
                <div class="bg-[#202020] border-[3px] border-[#D9BF9D] rounded-full w-full max-w-[370px]">
                    <!-- Foto & Divider -->
                    <div class="mx-auto w-full h-full p-2">
                        <img src="{{ asset($fotoAcara ?? '') }}" alt=""
                            class="mb-4 w-full max-h-80 object-cover rounded-t-full border-[2px] border-[#D9BF9D]"
                            data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="{{ asset('tema/luxury/layer-4.png') }}" alt="Layer 6"
                            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl mx-auto"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    </div>
                    <!-- Daftar Acara -->
                    @if ($invitation->acara->isNotEmpty())
                        <div class="text-center text-white px-5 my-10">
                            @foreach ($invitation->acara as $acara)
                                <div class="mb-10" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                                    data-aos-duration="800">
                                    <h3 class="text-3xl font-cormorant font-semibold text-[#D9BF9D] mb-5">
                                        {{ $acara->nama_acara }}
                                    </h3>
                                    <p class="text-sm font-poppins font-light">
                                        @php
                                            \Carbon\Carbon::setLocale('id');
                                            $tanggalAcara = \Carbon\Carbon::parse($acara->tanggal_acara);
                                        @endphp
                                        {{ $tanggalAcara->translatedFormat('l') }},
                                        {{ $tanggalAcara->translatedFormat('d') }}
                                        {{ $tanggalAcara->translatedFormat('F') }}
                                        {{ $tanggalAcara->translatedFormat('Y') }}
                                    </p>
                                    <p class="text-sm font-poppins font-light mt-2">
                                        {{ \Carbon\Carbon::parse($acara->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($acara->jam_selesai)->format('H:i') }}
                                        {{ $acara->zona_waktu }}
                                    </p>
                                    <hr class="my-5 border-t-2 border-[#D9BF9D]">
                                    <p class="text-sm font-poppins font-light">
                                        {{ $acara->nama_tempat }}
                                    </p>
                                    <p class="text-sm font-poppins font-light mt-2">
                                        {{ $acara->alamat_tempat }}
                                    </p>
                                    <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                        <a href="{{ $acara->link_google_maps }}" target="_blank"
                                            class="btn-grad w-44 flex items-center rounded-md justify-center gap-2 mt-5 py-2 px-4 mx-auto">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="font-cormorantGaramond font-semibold">Google Maps</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <!-- Foto & Divider -->
                    <div class="mx-auto w-full h-full p-2">
                        <img src="{{ asset('tema/luxury/layer-7.png') }}" alt="Layer 6"
                            class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl mx-auto"
                            data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="{{ asset($fotoAcara ?? '') }}" alt=""
                            class="mt-4 w-full max-h-80 object-cover rounded-b-full border-[2px] border-[#D9BF9D]"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    </div>
                </div>
                <!-- Live Streaming -->
                @if ($invitation->streaming)
                    <div
                        class="text-center text-white py-10 bg-[#202020] border-[3px] border-[#D9BF9D] rounded-lg my-10">
                        <div class="text-2xl text-[#D9BF9D] font-cormorant font-semibold uppercase text-nowrap"
                            data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Live Streaming
                        </div>
                        <div class="text-sm text-white font-poppins font-light mt-2 py-3 px-5" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Temui kami secara virtual untuk menyaksikan acara pernikahan kami melalui siaran langsung
                        </div>
                        <div class="flex justify-center mt-5" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <a href="{{ $invitation->streaming->link_streaming }}" target="__blank"
                                class="btn-grad py-2 px-6 flex items-center justify-center">
                                <span class="font-cormorantGaramond text-lg font-semibold">Tonton Streaming</span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <!-- Galeri -->
        @if ($invitation->galeri && ($invitation->galeri->video_galeri || $invitation->galeri->foto_galeri))
            <section>
                <div
                    class="relative flex flex-col py-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                    <!-- Teks -->
                    <div class="text-center px-5 italic text-[#D9BF9D]">
                        <div class="font-cormorantGaramond text-4xl" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            We Found Love
                        </div>
                    </div>
                    <!-- Divider -->
                    <img src="{{ asset('tema/luxury/layer-3.png') }}" alt="Layer 2" class="mx-auto w-40 mt-3"
                        data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Video -->
                    <div class="w-full px-5 pt-10" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        @if ($invitation->galeri->first() && $invitation->galeri->first()->video_galeri)
                            <div class="w-full h-56 rounded-lg">
                                <iframe class="w-full h-56" src="{{ $invitation->galeri->first()->video_galeri }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif
                    </div>
                    <!-- Foto Galeri -->
                    <div class="px-5 pb-2">
                        <div class="grid grid-cols-2 gap-4 py-6">
                            @if ($invitation->galeri && !empty($invitation->galeri->foto_galeri))
                                @foreach (json_decode($invitation->galeri->foto_galeri) as $foto)
                                    <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                        alt="Gallery Image 1"
                                        class="w-full h-auto rounded-lg object-cover cursor-pointer"
                                        onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')"
                                        data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                @endforeach
                            @else
                                <p class="text-center text-[#D9BF9D]">Tidak ada foto galeri</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Cerita -->
        @if ($cerita->isNotEmpty())
            <section>
                <div
                    class="relative flex flex-col py-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                    <div class="mx-5">
                        <!-- Teks -->
                        <div class="text-center px-5">
                            <div class="font-cormorantGaramond text-4xl text-[#D9BF9D] italic" data-aos="fade-right"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                How We Meet
                            </div>
                        </div>
                        <!-- Divider -->
                        <img src="{{ asset('tema/luxury/layer-3.png') }}" alt="Layer 2" class="mx-auto w-40 mt-3"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Cerita -->
                        <div class="py-10">
                            @foreach ($cerita as $c)
                                <div class="bg-[#202020] border-[3px] border-[#D9BF9D] rounded-lg mb-6"
                                    data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                    <div class="text-xl font-cormorant font-semibold text-[#D9BF9D] p-4">
                                        {{ $c->judul_cerita }}
                                    </div>
                                    <div class="pb-4 px-4 text-sm font-poppins">
                                        {{ $c->isi_cerita }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Wish & RSVP -->
        <section>
            <div
                class="relative flex flex-col pt-4 pb-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                <!-- Wish -->
                @if ($commentsEnabled)
                    <div class="bg-[#202020] border-[3px] border-[#D9BF9D] rounded-lg mx-5" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Teks -->
                        <div class="text-center my-10">
                            <h2 class="text-3xl font-cormorantGaramond font-semibold text-[#D9BF9D] pb-5 px-8">
                                Wedding Wish
                            </h2>
                            <p class="px-5 text-sm font-poppins">
                                Berikan ucapan, harapan dan do'a kepada kedua mempelai
                            </p>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('comments.store', $invitation->id) }}" method="POST"
                            class="mx-5 mb-5">
                            @csrf
                            <div class="mb-4 w-full">
                                <label for="name" class="block font-medium text-white text-lg font-cormorant">
                                    Nama:
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Nama Anda" required style="border-color: #D9BF9D;"
                                    onfocus="this.style.borderColor='#D9BF9D'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#D9BF9D'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="mb-4 w-full">
                                <label for="message" class="block font-medium text-white text-lg font-cormorant">
                                    Ucapan atau Doa:
                                </label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Tulis ucapan atau doa Anda di sini..." required style="border-color: #D9BF9D;"
                                    onfocus="this.style.borderColor='#D9BF9D'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#D9BF9D'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <div class="text-center text-sm">
                                <button type="submit"
                                    class="btn-grad w-40 flex items-center rounded-md justify-center gap-2 mt-5 py-2 px-6 mx-auto">
                                    <span class="font-cormorantGaramond text-lg font-semibold">Kirim</span>
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </form>
                        <!-- Their Wish -->
                        <div class="px-4 mb-10 mx-2" style="max-height: 500px; overflow-y: auto;">
                            @foreach ($comments as $comment)
                                <div class="my-4 p-5 bg-white rounded-lg shadow-lg">
                                    <h4 class="uppercase font-cormorant text-lg font-bold text-[#835c3d]">
                                        {{ $comment->name }}
                                    </h4>
                                    <p class="text-gray-600 font-poppins text-sm pt-1">
                                        {{ $comment->message }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br><br>
                @endif
                <!-- RSVP -->
                <div class="bg-[#202020] border-[3px] border-[#D9BF9D] rounded-lg mx-5" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Teks -->
                    <div class="text-center my-10">
                        <h2 class="text-3xl font-cormorantGaramond font-semibold text-[#D9BF9D] pb-5 px-8">
                            RSVP
                        </h2>
                        <p class="px-5 text-sm font-poppins">
                            Diharapkan Bapak/Ibu/Saudara/i untuk mengisi form yang ada dibawah ini :
                        </p>
                    </div>
                    <!-- Form -->
                    <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" class="mx-5 mb-10">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block font-medium text-white text-lg font-cormorant">
                                Nama :
                            </label>
                            <input type="text" id="name" name="nama"
                                class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                placeholder="Nama Anda" required style="border-color: #D9BF9D;"
                                onfocus="this.style.borderColor='#dbb658'; this.style.boxShadow='0 0 0 1px #dbb658';"
                                onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block font-medium text-white text-lg font-cormorant">
                                Pesan :
                            </label>
                            <textarea id="message" name="pesan" rows="4"
                                class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                placeholder="Tulis pesan Anda di sini..." required style="border-color: #D9BF9D;"
                                onfocus="this.style.borderColor='#dbb658'; this.style.boxShadow='0 0 0 1px #dbb658';"
                                onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="relative inline-block w-full">
                                <label for="message" class="block font-medium text-white text-lg font-cormorant">
                                    Konfirmasi Kehadiran
                                </label>
                                <button id="dropdownButton"
                                    class="mt-1 block text-left bg-white text-black w-full border border-[#D9BF9D] shadow-sm py-2 px-3 sm:text-sm font-poppins"
                                    style="transition: 0.3s ease; outline: none;" onclick="toggleDropdown(event)">
                                    . . .
                                </button>
                                <ul id="dropdownMenu"
                                    class="hidden absolute z-10 w-full mt-1 bg-white text-black border border-[#D9BF9D] shadow-lg font-poppins">
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#202020] hover:text-white"
                                        onclick="selectOption('Ya, Saya akan datang')">
                                        Ya, Saya akan datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#202020] hover:text-white"
                                        onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                        Maaf, Saya tidak bisa datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-[#202020] hover:text-white"
                                        onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                        Saya belum tahu bisa datang atau tidak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" id="konfirmasi_kehadiran" name="konfirmasi_kehadiran">
                        <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                        <div class="text-center">
                            <button type="submit"
                                class="btn-grad w-40 flex items-center rounded-md justify-center gap-2 mt-5 py-2 px-6 mx-auto">
                                <span class="font-cormorantGaramond text-lg font-semibold">Kirim</span>
                                <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Kado Digital -->
        @if ($invitation->kadodigital->isNotEmpty())
            <section>
                <div
                    class="relative flex flex-col pt-20 pb-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                    <div class="bg-[#202020] border-[3px] border-[#D9BF9D] rounded-lg mx-5" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Teks -->
                        <div class="text-center my-10">
                            <h2 class="text-3xl font-cormorantGaramond font-semibold text-[#D9BF9D] pb-5 px-8">
                                Kado Digital
                            </h2>
                            <p class="px-5 text-sm font-poppins">
                                Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah
                                ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.
                            </p>
                        </div>
                        <!-- Divider -->
                        <div class="flex items-center justify-center text-center gap-4">
                            <div class="h-[1px] bg-[#D9BF9D] flex-1"></div>
                            <div class="text-2xl text-[#D9BF9D] mx-4">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="h-[1px] bg-[#D9BF9D] flex-1"></div>
                        </div>
                        <!-- Rekening -->
                        <div class="pt-5">
                            @foreach ($invitation->kadodigital as $kado)
                                <div class="w-full text-center font-poppins mb-10">
                                    <p class="mt-4">Bank :</p>
                                    <p class="text-[#D9BF9D]">{{ $kado->nama_bank }}</p>
                                    <p class="mt-4">Atas Nama :</p>
                                    <p class="text-[#D9BF9D]">{{ $kado->penerima }}</p>
                                    <p class="mt-4">Nomor Rekening :</p>
                                    <p id="nomor_rekening_1" class="text-[#D9BF9D] mb-4">
                                        {{ $kado->no_rekening }}
                                    </p>
                                    <button id="copyButton_{{ $kado->id }}" type="button"
                                        onclick="copyToClipboard({{ $kado->id }})"
                                        class="btn-grad text-sm text-nowrap text-white py-2 px-6">
                                        <span>Salin Nomor Rekening</span>
                                        <i class="fas fa-copy text-lg ml-1"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Penutup -->
        <section>
            <div
                class="relative flex flex-col py-10 text-white justify-center items-center min-h-screen max-w-[500px] mx-auto">
                <!-- Konten -->
                <div class="text-center m-10">
                    <div class="my-5">
                        <!-- Teks Penutup -->
                        <div>
                            <div class="font-cormorant text-xl md:text-lg" data-aos="fade-right"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                {{ $invitation->tekspenutup->teks ??
                                    'Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami' }}
                            </div>
                            <div class="tet-sm font-croissant text-[#D9BF9D] mt-5" data-aos="fade-left"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                {{ $invitation->tekspenutup->salam ?? ' Wassalamu’alaikum Wr. Wb.' }}
                            </div>
                        </div>
                        <br><br>
                        <!-- Teks -->
                        <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="font-cormorant text-xl md:text-lg">
                                Kami yang berbahagia
                            </div>
                            <div
                                class="text-3xl md:text-4xl text-center font-cormorant font-semibold uppercase mt-2 leading-none">
                                @if ($invitation->mempelai)
                                    {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                                    &
                                    {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                                @else
                                    - & -
                                @endif
                            </div>
                            <!-- Divider -->
                            <img src="{{ asset('tema/luxury/layer-3.png') }}" alt="Layer 2"
                                class="pt-3 w-48 mx-auto">
                        </div>
                        <!-- Credit -->
                        <div class="mt-10 font-cormorant text-xl md:text-lg" data-aos="fade-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
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
        </section>

    </div>

    <!-- Modal Foto -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-black/80 absolute inset-0"></div>
        <div class="relative p-1 w-full max-h-full">
            <div class="relative bg-white">
                <button type="button"
                    class="absolute top-2 right-2 text-white rounded-lg !bg-[#835c3d] !important text-sm w-7 h-7 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4">
                    <img id="modal-image"
                        class="w-auto h-full mx-auto object-contain rounded-lg border-[2px] border-[#D9BF9D]"
                        src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#835c3d] bg-white py-3 px-4 rounded-full shadow-lg">
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
                    "<h2 style='color:#e02424; font-family: Poppins, sans-serif;'>Anda belum mengisi data acara</h2>";
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
