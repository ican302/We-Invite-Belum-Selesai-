<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $invitation->title }}</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

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
        .bg-trans {
            background-color: rgba(255, 255, 255, 0.8);
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

        #volume-control::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4B6B99;
            cursor: pointer;
            margin-top: -8px;
        }

        #volume-control::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4B6B99;
            cursor: pointer;
        }

        #volume-control::-ms-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4B6B99;
        }

        #volume-control::-webkit-slider-runnable-track {
            background: white;
            height: 4px;
        }

        #volume-control::-moz-range-track {
            background: white;
            height: 4px;
        }

        #volume-control::-ms-track {
            background: white;
            height: 4px;
            border: none;
            color: transparent;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 min-h-full antialiased" style="background-color: #87ace0; overflow: hidden;">

    <!-- Sampul -->
    <div id="cover-page" class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
        </div>
        <div class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px]"
            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <!-- Flash Message -->
            @if (session('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @elseif (session('error'))
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            <div class="mx-auto my-5">
                @if ($invitation->galeri && $invitation->galeri->isNotEmpty())
                    @php
                        $firstGallery = $invitation->galeri->first();
                    @endphp
                    @if ($firstGallery->foto_sampul)
                        <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $firstGallery->foto_sampul)) }}"
                            alt="Foto Sampul" class="rounded-full w-40 h-40 mx-auto object-cover mb-5"
                            data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500">
                    @else
                        <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Sampul"
                            class="rounded-full w-40 h-40 mx-auto object-cover mb-5">
                    @endif
                @else
                    <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Sampul"
                        class="rounded-full w-40 h-40 mx-auto object-cover mb-5">
                @endif
                <div class="text-2xl font-bold mt-3 font-croissant text-[#4B6B99]" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    @if ($invitation->mempelai)
                        {{ $invitation->mempelai->nama_pria }} & {{ $invitation->mempelai->nama_wanita }}
                    @else
                        - & -
                    @endif
                </div>
                <div class="mt-10 font-montserrat text-gray-600">
                    <div class="text-sm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        Kepada Yth :
                    </div>
                    <div class="text-sm mt-1" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="700" data-aos-delay="500">
                        Bapak/Ibu/Saudara/i
                    </div>
                    @if (isset($guestData) && !empty($guestData->nama_tamu))
                        <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#4B6B99]" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                            {{ $guestData->nama_tamu }}
                        </div>
                    @else
                        <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#4B6B99]" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                            -
                        </div>
                    @endif
                    <hr style="border-color: #4B6B99;" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="700" data-aos-delay="500">
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <button type="button" onclick="openInvitation()"
                            class="text-white py-2 px-6 rounded mt-10 font-croissant focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150"
                            style="background-color: #4B6B99;">
                            <i class="fa-solid fa-envelope mr-1"></i>
                            Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pembuka -->
    <div id="main-invitation"
        class="card-1 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
        </div>
        <div id="1"
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
            data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <div class="mx-auto my-5">
                <div class="text-sm text-center" data-aos="fade-down" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <div class="text-[#4B6B99] font-croissant">
                        Assalamu’alaikum Wr. Wb.
                    </div>
                    <div class="font-montserrat mt-2 px-2">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah kami akan
                        menyelenggarakan
                        acara
                        pernikahan :
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 mb-5 mt-10">
                    <div class="w-20 h-20 rounded-full overflow-hidden" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        @if ($invitation->mempelai && $invitation->mempelai->foto_pria)
                            <img src="{{ asset($invitation->mempelai->foto_pria) }}" alt="Foto Pria">
                        @else
                            <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Pria"
                                class="w-full h-full object-cover">
                        @endif
                    </div>
                    <i class="fa-solid fa-heart text-3xl text-[#4B6B99] px-5" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500"></i>
                    <div class="w-20 h-20 rounded-full overflow-hidden" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        @if ($invitation->mempelai && $invitation->mempelai->foto_wanita)
                            <img src="{{ asset($invitation->mempelai->foto_wanita) }}" alt="Foto Wanita">
                        @else
                            <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Wanita"
                                class="w-full h-full object-cover">
                        @endif
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="mt-5 text-sm">
                        <div class="font-bold font-croissant text-[#4B6B99]">
                            {{ $invitation->mempelai ? $invitation->mempelai->nama_pria : '-' }}
                        </div>
                        <div class="font-montserrat text-gray-600 my-1">
                            Putra
                            ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_pria : '' }}
                            Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_pria : '' }}
                            &amp; Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_pria : '' }}
                        </div>
                        <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? $invitation->mempelai->instagram_link_pria : '' }}"
                            target="_blank" class="text-[#4B6B99]"
                            title="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? '' : 'Link Instagram tidak tersedia' }}">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                    </div>
                    <div class="my-5 text-[#4B6B99] text-2xl font-croissant">&</div>
                    <div class="text-sm">
                        <div class="font-bold font-croissant text-[#4B6B99]">
                            {{ $invitation->mempelai ? $invitation->mempelai->nama_wanita : '-' }}
                        </div>
                        <div class="font-montserrat text-gray-600 my-1">
                            Putri
                            ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_wanita : '' }}
                            Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_wanita : '' }}
                            &amp;
                            Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_wanita : '' }}
                        </div>
                        <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? $invitation->mempelai->instagram_link_wanita : '' }}"
                            target="_blank" class="text-[#4B6B99]"
                            title="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? '' : 'Link Instagram tidak tersedia' }}">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-10 font-montserrat text-[#4B6B99]" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    <div id="formattedDate" class="text-lg font-semibold">
                        Waktu Menuju Acara
                    </div>
                    <div id="countdown" class="text-center mt-5 flex justify-center space-x-5">
                        <div class="text-center">
                            <span style="background-color: #4B6B99;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center days">00</span>
                            <br>
                            <small>
                                Hari
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #4B6B99;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center hours">00</span>
                            <br>
                            <small>
                                Jam
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #4B6B99;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center minutes">00</span>
                            <br>
                            <small>
                                Menit
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #4B6B99;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center seconds">00</span>
                            <br>
                            <small>
                                Detik
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Acara -->
    @if ($invitation->acara->isNotEmpty())
        <div class="card-2 relative flex flex-col justify-center items-center min-h-screen w-full mx-auto max-w-[500px] p-10"
            style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute top-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]">
            </div>
            <div class="absolute bottom-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
            </div>
            <div id="2"
                class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <div class="mx-auto my-20">
                    <div
                        class="grid grid-cols-1 gap-6 text-center items-center mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                        @foreach ($invitation->acara as $acara)
                            <div class="text-[#4B6B99] text-2xl font-bold mb-5 mt-10 font-croissant"
                                data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"
                                data-aos-delay="500">
                                {{ $acara->nama_acara }}
                            </div>
                            <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                                data-aos-delay="500">
                                <div class="text-lg font-medium">
                                    <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('l') }}
                                    </div>
                                </div>
                                <div class="text-gray-600 my-5">
                                    <div class="text-5xl font-extrabold">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('d') }}
                                    </div>
                                    <div class="text-sm font-light mt-5">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('F') }}
                                    </div>
                                </div>
                                <div class="text-lg font-medium">
                                    <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('Y') }}
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                                data-aos-delay="500">
                                <div class="text-sm mt-5">
                                    <div class="text-gray-700">
                                        Pukul
                                    </div>
                                    <div class="text-gray-700">
                                        {{ $acara->jam_mulai }} - {{ $acara->jam_selesai }} {{ $acara->zona_waktu }}
                                    </div>
                                    <br>
                                    <div class="text-gray-700 pb-1 font-bold">
                                        {{ $acara->nama_tempat }}
                                    </div>
                                    <div class="text-gray-700">
                                        {{ $acara->alamat_tempat }}
                                    </div>
                                </div>
                                <br>
                                <div class="flex justify-center text-center items-center text-sm mb-10">
                                    <a class="bg-[#4B6B99] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150"
                                        href="{{ $acara->link_google_maps }}" target="_blank">
                                        <i class="fas fa-map-marker-alt mb-2"></i>
                                        <br>
                                        Google Map
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Live -->
    @if ($invitation->streaming)
        <div class="card-3 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute top-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]">
            </div>
            <div class="absolute bottom-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
            </div>
            <div class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <div class="mx-auto my-5">
                    <div
                        class="grid grid-cols-1 gap-6 text-center items-center mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                        <div class="text-[#4B6B99] text-2xl font-bold font-croissant" data-aos="zoom-in"
                            data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                            Live Streaming
                        </div>
                        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500">
                            <div class="flex justify-center text-center items-center text-sm">
                                <a href="{{ $invitation->streaming->link_streaming }}" target="__blank"
                                    class="bg-[#4B6B99] text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="fas fa-broadcast-tower mb-2"></i><br>
                                    Gabung Live
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Galeri & Cerita -->
    @if (
        ($invitation->galeri &&
            $invitation->galeri->isNotEmpty() &&
            ($invitation->galeri->first()->video_galeri || $invitation->galeri->first()->foto_galeri)) ||
            ($invitation->cerita && $invitation->cerita->isNotEmpty()) ||
            $invitation->quote)
        <div class="card-4 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute top-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]">
            </div>
            <div class="absolute bottom-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
            </div>
            <div id="3"
                class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <div class="mx-auto my-28">
                    @if (
                        ($invitation->galeri->first() && $invitation->galeri->first()->video_galeri) ||
                            ($invitation->galeri && $invitation->galeri->isNotEmpty() && $invitation->galeri->first()->foto_galeri))
                        <div class="text-[#4B6B99] text-2xl font-bold mb-10 font-croissant text-center"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500">
                            Galeri
                        </div>
                    @endif
                    @if ($invitation->galeri->first() && $invitation->galeri->first()->video_galeri)
                        <div class="w-full rounded" data-aos="fade-right" data-aos-easing="ease-in-sine"
                            data-aos-duration="700" data-aos-delay="500">
                            <iframe class="w-full h-56 rounded"
                                src="{{ $invitation->galeri->first()->video_galeri }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    @endif
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="grid grid-cols-2 gap-4 py-5">
                            @if ($invitation->galeri && $invitation->galeri->isNotEmpty())
                                @foreach ($invitation->galeri as $item)
                                    @if (!empty($item->foto_galeri))
                                        @foreach (json_decode($item->foto_galeri) as $foto)
                                            <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                                alt="Foto" class="w-full h-28 object-cover rounded cursor-pointer"
                                                onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')">
                                        @endforeach
                                    @else
                                        <p class="text-center text-gray-500">Tidak ada foto galeri.</p>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if ($invitation->cerita->isNotEmpty())
                        <div class="text-[#4B6B99] text-2xl font-bold font-croissant mt-10 text-center"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500">
                            Cerita
                        </div>
                    @endif
                    @if ($invitation->quote)
                        <div class="text-center text-sm py-5 font-montserrat" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                            {!! nl2br(e($invitation->quote->quote)) !!}
                        </div>
                        <div class="text-center pb-5 text-lg font-semibold font-croissant text-[#4B6B99]"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500">
                            {{ $invitation->quote->author }}
                        </div>
                    @endif
                    <br>
                    @if ($invitation->cerita->isNotEmpty())
                        @foreach ($invitation->cerita as $cerita)
                            <div class="ml-[15px] mb-5" data-aos="fade-up" data-aos-easing="ease-in-sine"
                                data-aos-duration="700" data-aos-delay="500">
                                <div class="bg-white rounded-lg shadow-md text-center border"
                                    style="filter: drop-shadow(-15px 15px 2px #4B6B99);">
                                    <div class="bg-[#4B6B99] text-white font-bold font-montserrat p-4 rounded-t-lg">
                                        {{ $cerita->judul_cerita }}
                                    </div>
                                    <div class="p-4 text-sm font-montserrat">
                                        {{ $cerita->isi_cerita }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!-- Ucapan & Doa -->
    @if ($commentsEnabled || $comments->isNotEmpty())
        <div class="card-5 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute top-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]">
            </div>
            <div class="absolute bottom-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
            </div>
            <div id="4"
                class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <div class="mx-auto my-5 w-full">
                    <h2 class="text-center text-[#4B6B99] text-2xl font-bold mb-10 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        Ucapan & Doa
                    </h2>
                    @if ($commentsEnabled)
                        <form action="{{ route('comments.store', $invitation->id) }}" method="POST"
                            data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                            data-aos-delay="500" class="w-full">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 font-croissant">
                                    Nama :
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                    placeholder="Nama Anda" required
                                    onfocus="this.style.borderColor='#4B6B99'; this.style.boxShadow='0 0 0 1px #4B6B99';"
                                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                                    Ucapan atau Doa :
                                </label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                    placeholder="Tulis ucapan atau doa Anda di sini..." required
                                    onfocus="this.style.borderColor='#4B6B99'; this.style.boxShadow='0 0 0 1px #4B6B99';"
                                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #4B6B99;">
                                    <span>Kirim</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    @else
                        <p class="text-center text-gray-500" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="700" data-aos-delay="500">
                            Komentar telah dinonaktifkan untuk undangan ini
                        </p>
                    @endif
                    @if ($commentsEnabled && $comments->isNotEmpty())
                        <div class="bg-gray-50 p-4 rounded-lg shadow-inner border mt-10"
                            style="max-height: 300px; overflow-y: auto;" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                            @foreach ($comments as $comment)
                                <div class="mb-4 p-5 bg-white rounded-lg shadow">
                                    <h4 class="font-bold font-croissant">{{ $comment->name }}</h4>
                                    <p class="text-gray-600 font-montserrat text-sm pt-1">{{ $comment->message }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!-- RSVP -->
    <div class="card-6 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
        </div>
        <div id="5"
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
            data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <div class="mx-auto my-5 w-full">
                <h2 class="text-center text-[#4B6B99] text-2xl font-bold mb-10 font-croissant" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    RSVP
                </h2>
                <form action="#" method="POST" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 font-croissant">
                            Nama :
                        </label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Nama Anda" required
                            style="border-color: #d1d5db; transition: border-color 0.3s ease; outline: none;"
                            onfocus="this.style.borderColor='#4B6B99'; this.style.boxShadow='0 0 0 1px #4B6B99';"
                            onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';">

                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                            Pesan :
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Tulis ucapan atau doa Anda di sini..." required style="outline: none;"
                            onfocus="this.style.borderColor='#4B6B99'; this.style.boxShadow='0 0 0 1px #4B6B99';"
                            onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="relative inline-block w-full">
                            <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                                Konfirmasi Kehadiran
                            </label>
                            <button id="dropdownButton"
                                class="mt-1 block text-left w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                style="transition: 0.3s ease; outline: none;" onclick="toggleDropdown()">
                                . . .
                            </button>

                            <ul id="dropdownMenu"
                                class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg font-montserrat">
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Ya, Saya akan datang')">
                                    Ya, Saya akan datang
                                </li>
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                    Maaf, Saya tidak bisa datang
                                </li>
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                    Saya belum tahu bisa datang atau tidak
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                            style="background-color: #4B6B99;">
                            <span>
                                Kirim
                            </span>
                            <i class="fas fa-paper-plane ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hadiah Digital -->
    @if ($invitation->kadodigital->isNotEmpty())
        <div class="card-7 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute top-0 right-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]">
            </div>
            <div class="absolute bottom-0 left-0 z-10">
                <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                    class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
            </div>
            <div id="6"
                class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]"
                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <div class="mx-auto my-5">
                    <div class="text-center text-[#4B6B99] text-2xl font-bold mb-5 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        Kado Digital
                    </div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="text-sm text-center font-montserrat mt-5 px-2">
                            Kami menerima kado pernikahan dalam bentuk digital di bawah ini:
                        </div>
                        @foreach ($invitation->kadodigital as $kado)
                            <br>
                            <hr style="border-color: #4B6B99;">
                            <div class="w-full text-center">
                                <p class="text-gray-800 font-montserrat mt-4">Bank :</p>
                                <p class="text-[#4B6B99] font-montserrat">{{ $kado->nama_bank }}</p>
                                <p class="mt-4 text-gray-800 font-montserrat">Atas Nama :</p>
                                <p class="text-[#4B6B99] font-montserrat">{{ $kado->penerima }}</p>
                                <p class="mt-4 text-gray-800 font-montserrat">Nomor Rekening :</p>
                                <p id="nomor_rekening_{{ $kado->id }}"
                                    class="text-[#4B6B99] font-montserrat mb-4">
                                    {{ $kado->no_rekening }}
                                </p>
                            </div>
                            <div class="mb-4 text-center">
                                <button id="copyButton_{{ $kado->id }}" type="button"
                                    onclick="copyToClipboard('{{ $kado->id }}')"
                                    class="text-sm text-nowrap text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #4B6B99;">
                                    <span>Salin Nomor Rekening</span>
                                    <i class="fas fa-copy text-lg ml-1"></i>
                                </button>
                            </div>
                            <hr style="border-color: #4B6B99;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Penutup -->
    <div class="card-8 relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/tema-1/images/bg.jpg') }}'); background-position: center; background-size: contain;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/tema-1/images/watercolor-4.png') }}" alt="Watercolor 3"
                class="w-[150px] h-auto md:w-[200px]" style="transform: rotate(180deg);">
        </div>
        <div class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px] mb-28 mt-8"
            data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <div class="mx-auto my-5">
                <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="text-sm font-montserrat">
                        Atas kehadiran dan do’a restu dari Bapak/Ibu/Saudara/i sekalian, kami mengucapkan Terima Kasih.
                    </div>
                    <div class="tet-sm text-[#4B6B99] font-croissant mt-5">
                        Wassalamu’alaikum Wr. Wb.
                    </div>
                </div>
                <div class="rounded-full w-40 h-40 mx-auto object-cover my-10" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    @if ($invitation->galeri && $invitation->galeri->isNotEmpty())
                        @php
                            $firstGallery = $invitation->galeri->first();
                        @endphp
                        @if ($firstGallery->foto_sampul)
                            <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $firstGallery->foto_sampul)) }}"
                                alt="Foto Sampul" class="rounded-full w-40 h-40 mx-auto object-cover mb-5"
                                data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                                data-aos-delay="500">
                        @else
                            <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Sampul"
                                class="rounded-full w-40 h-40 mx-auto object-cover mb-5">
                        @endif
                    @else
                        <img src="{{ asset('tema/tema-1/images/photos-videos/default.png') }}" alt="Foto Sampul"
                            class="rounded-full w-40 h-40 mx-auto object-cover mb-5">
                    @endif
                </div>
                <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="text-sm font-montserrat">
                        Kami yang berbahagia
                    </div>
                    <div class="text-2xl font-bold mt-3 font-croissant text-[#4B6B99]">
                        Ajeng & Teddy
                    </div>
                    <div class="mt-10 font-montserrat text-gray-600">
                        <div class="text-sm mt-5 text-[#4B6B99;] font-montserrat">
                            Created with
                            <i class="fa-solid fa-heart text-[#4B6B99;]"></i>
                            by
                            <a href="{{ route('home') }}" class="hover:underline" target="_blank">WeInvite</a>
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
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-[#4B6B99]">
                        Galeri Foto
                    </h3>
                    <button type="button"
                        class="text-[#4B6B99] bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        onclick="closeModal()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">
                            Close modal
                        </span>
                    </button>
                </div>
                <div class="px-4 py-2">
                    <img id="modal-image" class="w-full h-[75vh] object-contain rounded" src=""
                        alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#4B6B99] bg-white py-3 px-4 rounded-full shadow-lg">
        <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        @if ($invitation->music)
            <iframe id="music-iframe" width="100%" height="160" scrolling="no" frameborder="no"
                allow="autoplay" hidden
                src="https://w.soundcloud.com/player/?url={{ urlencode($invitation->music->file_path) }}&color=%23ff5500&auto_play=true&hide_related=true&show_comments=false&show_user=false&show_reposts=false&visual=false&repeat=true">
            </iframe>
        @endif
    </button>

    <!-- Navbar -->
    <div id="navbar"
        class="fixed bottom-0 left-1/2 transform -translate-x-1/2 z-20 w-full max-w-[500px] border-t border-gray-300 h-16 font-average bg-white/70 backdrop-blur hidden">

        <!-- Menu Navbar -->
        <div class="grid h-full max-w-lg grid-cols-6 mx-auto font-medium justify-items-center">
            <a href="#1" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-heart text-[#4B6B99]"></i>
            </a>
            <a href="#2" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-clock text-[#4B6B99]"></i>
            </a>
            <a href="#3" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-photo-film text-[#4B6B99]"></i>
            </a>
            <a href="#4" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-comment-dots text-[#4B6B99]"></i>
            </a>
            <a href="#5" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-file-signature text-[#4B6B99]"></i>
            </a>
            <a href="#6" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group">
                <i class="fa-solid fa-gift text-[#4B6B99]"></i>
            </a>
        </div>
    </div>

    <script>
        // Inisialisasi AOS
        AOS.init();

        // Fungsi Buka Undangan
        function openInvitation() {
            document.body.style.overflow = "auto";
            const navbar = document.getElementById("navbar");
            navbar.classList.remove("hidden");

            gsap.fromTo(
                navbar, {
                    opacity: 0,
                    y: 20,
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1.5,
                    ease: "power1.out",
                }
            );

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

            const navbar = document.getElementById("navbar");
            navbar.classList.add("hidden");
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
                    "<h2 style='color:red;'>Tidak Ada Acara</h2>";
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
        function toggleDropdown() {
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Fungsi Pilih Opsi Dropdown
        function selectOption(option) {
            const dropdownButton = document.getElementById("dropdownButton");
            dropdownButton.textContent = option;
            document.getElementById("dropdownMenu").classList.add("hidden");
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
    </script>
</body>

</html>
