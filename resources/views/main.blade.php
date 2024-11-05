@extends('layouts.main-layout')

@section('title', 'Undangan Pernikahan Digital')

@section('content')

    <!-- Beranda -->
    <div class="relative bg-cover bg-center w-full min-h-screen text-gray-900 font-average" id="beranda">
        <div class="relative py-10 px-5 md:absolute md:inset-0">
            <div class="bg-container absolute inset-0 z-0"></div>
            <div class="relative mx-auto max-w-4xl z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-20 mt-20">
                    <div class="md:col-span-2 flex flex-col md:pt-20">
                        <h1 class="text-4xl mb-5 font-bold tracking-tight sm:text-6xl" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="700">
                            Platform Undangan Pernikahan Digital
                        </h1>
                        <p class="mt-5 text-lg leading-8" data-aos="fade-left" data-aos-easing="ease-in-sine"
                            data-aos-duration="700">Lebih praktis, hemat dan kekinian. Buat undangan pernikahan berbasis
                            website <span class="font-bold">GRATIS</span></p>
                        <div class="mt-12 flex items-center gap-x-6">
                            <a href="#tema"
                                class="bg-gray-800 hover:bg-black text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150"
                                data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="900"
                                data-aos-duration="700">
                                <i class="fas fa-envelope mr-2"></i>
                                <span class="mr-2">Buat Undangan</span>
                            </a>
                            <a href="/tutorial" class="text-sm font-semibold leading-6" data-aos="fade-up"
                                data-aos-easing="ease-in-sine" data-aos-delay="700" data-aos-duration="700">
                                Cara Buat<span class="ml-1">→</span>
                            </a>
                        </div>
                    </div>

                    <div class="relative mx-auto w-[240px] h-[430px] overflow-hidden rounded-lg shadow-xl bg-gray-800"
                        data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="700" data-aos-duration="700">
                        <div class="flex items-center justify-center absolute inset-0 z-10">
                            <div class="w-[220px] h-[350px] bg-white rounded-md overflow-hidden shadow-lg">
                                <div class="splide" id="carousel">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="{{ asset('tema/tema-1/tema-1.png') }}"
                                                    class="block w-full h-full object-cover object-center transition-transform duration-500 hover:scale-110"
                                                    alt="Theme 1">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-3 right-2 z-20">
                            <div class="flex space-x-1">
                                <div class="w-3 h-3 rounded-full bg-red-500 animate-bounce"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500 animate-bounce delay-1"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500 animate-bounce delay-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fitur -->
    <div class="max-w-6xl mx-auto px-4 py-20">
        <h2 class="text-3xl font-bold text-center mb-1 font-croissant" id="fitur">Fitur</h2>
        <div class="flex justify-center mb-10">
            <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex items-center justify-end bg-white p-6 rounded-lg shadow-lg">
                <div class="mr-6 text-right">
                    <h3 class="text-xl font-semibold mb-2">Aktif Selamanya</h3>
                    <p class="text-gray-600">Fitur ini memastikan undangan digital Anda tetap aktif selamanya, sehingga tamu
                        dapat melihat detail acara kapan saja tanpa batas waktu.</p>
                </div>
                <i class="fas fa-infinity text-5xl text-gray-500"></i>
            </div>
            <div class="flex items-center bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-edit text-5xl text-gray-500 mr-6"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Free Kustomisasi</h3>
                    <p class="text-gray-600">Anda dapat menyesuaikan tampilan undangan sesuai selera tanpa biaya tambahan,
                        sehingga undangan terlihat lebih personal dan unik.</p>
                </div>
            </div>
            <div class="flex items-center justify-end bg-white p-6 rounded-lg shadow-lg">
                <div class="mr-6 text-right">
                    <h3 class="text-xl font-semibold mb-2">Galeri</h3>
                    <p class="text-gray-600">Fitur ini memungkinkan Anda menambahkan galeri foto atau video untuk membuat
                        undangan lebih interaktif dan berkesan bagi tamu.</p>
                </div>
                <i class="fas fa-images text-5xl text-gray-500"></i>
            </div>
            <div class="flex items-center bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-comments text-5xl text-gray-500 mr-6"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Ucapan & Doa</h3>
                    <p class="text-gray-600">Tamu dapat meninggalkan pesan atau doa secara langsung di undangan digital,
                        membuat momen spesial Anda lebih bermakna.</p>
                </div>
            </div>
            <div class="flex items-center justify-end bg-white p-6 rounded-lg shadow-lg">
                <div class="mr-6 text-right">
                    <h3 class="text-xl font-semibold mb-2">Kado</h3>
                    <p class="text-gray-600">Fitur ini memudahkan tamu untuk memberikan kado melalui tautan ke platform
                        pembayaran online yang disediakan.</p>
                </div>
                <i class="fas fa-gift text-5xl text-gray-500"></i>
            </div>
            <div class="flex items-center bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-music text-5xl text-gray-500 mr-6"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Musik</h3>
                    <p class="text-gray-600">Fitur ini memungkinkan Anda untuk menambahkan musik latar pada undangan,
                        sehingga membuatnya lebih hidup dan sesuai dengan tema acara.</p>
                </div>
            </div>
            <div class="flex items-center justify-end bg-white p-6 rounded-lg shadow-lg max-w-3xl w-full md:hidden">
                <div class="mr-6 text-right">
                    <h3 class="text-xl font-semibold mb-2">Live Streaming</h3>
                    <p class="text-gray-600">Tamu yang tidak bisa hadir dapat menyaksikan acara secara langsung melalui
                        fitur Live Streaming yang mudah diakses dari undangan.</p>
                </div>
                <i class="fas fa-video text-5xl text-gray-500 mr-6"></i>
            </div>
        </div>
        <div class="flex justify-center items-center mt-10 hidden md:flex">
            <div class="flex items-center bg-white p-6 rounded-lg shadow-lg max-w-3xl w-full">
                <i class="fas fa-video text-5xl text-gray-500 mr-6"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Live Streaming</h3>
                    <p class="text-gray-600">Tamu yang tidak bisa hadir dapat menyaksikan acara secara langsung melalui
                        fitur Live Streaming yang mudah diakses dari undangan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tema -->
    <div class="relative mx-auto px-4 py-20">
        <div class="bg-container-2 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h2 class="text-3xl font-bold text-center mb-1 font-croissant" id="tema">Tema</h2>
            <div class="flex justify-center mb-10">
                <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
            </div>

            <div class="grid grid-cols-1 gap-8">
                @foreach ($themes as $theme)
                    <div class="flex flex-col items-center">
                        <div class="max-w-[300px] rounded-lg overflow-hidden shadow-lg border bg-white">
                            <img src="{{ asset($theme->path . '/' . $theme->thumbnail) }}" alt="{{ $theme->name }}"
                                class="w-[250px] h-[400px] object-cover mx-auto mt-4">
                            <div class="px-6 py-4">
                                <div class="font-bold font-croissant text-xl mb-2 text-center">
                                    {{ $theme->name }}
                                </div>
                            </div>
                            <div class="flex justify-center space-x-2 pb-4 px-6">
                                <a href="{{ route('demo.theme', ['slug' => $theme->slug]) }}" target="_blank"
                                    class="bg-green-500 hover:bg-green-600 text-white font-bold shadow-lg py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 antialiased">
                                    <i class="fas fa-eye mr-2"></i>
                                    <span>Demo</span>
                                </a>
                                <button aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-scale-animation-modal-{{ $theme->id }}"
                                    data-hs-overlay="#hs-scale-animation-modal-{{ $theme->id }}"
                                    class="select-theme bg-gray-800 hover:bg-black text-white font-bold shadow-lg py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150 antialiased">
                                    <i class="fas fa-check mr-2"></i>
                                    <span>Pilih</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Modal Buat Undangan -->
    @if (isset($theme))
        <div id="hs-scale-animation-modal-{{ $theme->id }}"
            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 anti hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label-{{ $theme->id }}">
            <div
                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center p-4 md:p-5 border-b">
                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-lg text-gray-800">
                            Buat Undangan
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                            aria-label="Close" data-hs-overlay="#hs-scale-animation-modal-{{ $theme->id }}">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('user.store.invitation') }}" method="POST" class="p-4 md:p-5">
                        @csrf
                        <input type="hidden" name="theme_id" id="theme_id" value="{{ $theme->id }}">
                        <div class="mb-4">
                            <label for="title" class="block mb-2 text-gray-900">
                                Judul Undangan
                            </label>
                            <input type="text" name="title" id="title" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <hr class="my-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-plus mr-2"></i>
                            <span class="mr-2">
                                Buat Undangan
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <!-- Donasi -->
    <div class="max-w-6xl mx-auto px-4 py-20 text-center" id="donasi">
        <h2 class="text-3xl font-bold mb-1 font-croissant">Donasi</h2>
        <div class="flex justify-center mb-10">
            <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
        </div>
        <h2 class="text-3xl mt-5">Dukung Kami</h2>
        <p class="mt-4 text-lg text-gray-600">Jika Anda ingin mendukung pengembangan platform ini, Anda dapat berdonasi
            melalui:</p>
        <div class="p-5 mt-5 max-w-lg mx-auto">
            <div id="accordion-collapse" data-accordion="collapse" class="shadow-lg">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                        onclick="toggleAccordion(1)">
                        <img src="{{ asset('images/dana.png') }}" alt="" class="h-12 w-18" />
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="accordion-content"
                    aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-gray-200">
                        <p class="mb-2 text-gray-600">Flowbite is an open-source library of
                            interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                            navbars, and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp -->
    <a href="https://wa.me/628558359732" target="_blank"
        class="fixed bottom-3 right-3 md:bottom-6 md:right-6 bg-gray-800 text-white rounded-full w-16 p-3 shadow-lg hover:bg-black transition duration-300 flex items-center justify-center"
        data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">
        <i class="fa-brands fa-whatsapp text-4xl"></i>
    </a>

@endsection
