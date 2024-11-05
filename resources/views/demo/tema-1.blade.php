<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undangan Pernikahan</title>

    @vite('resources/css/app.css')

    <!-- External CSS -->
    <link rel="stylesheet" href="/tema/tema-1/css/tema-1.css">

    <!-- External JS -->
    <script src="/tema/tema-1/js/tema-1.js" defer></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <!-- GSAP and other JS libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <!-- Flowbite CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



</head>

<body class="bg-gray-100 text-gray-800 min-h-full" style="background-color: #87ace0; overflow: hidden;">

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
            <div class="mx-auto my-5">
                <img src="
                {{ asset('tema/tema-1/images/photos-videos/cover.jpg') }}"
                    alt="Profile Picture" class="rounded-full w-40 h-40 mx-auto object-cover mb-5" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500" />
                <div class="text-2xl font-bold mt-3 font-croissant text-[#4B6B99]" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Ajeng & Teddy
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
                    <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#4B6B99]" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        Melissa
                    </div>
                    <hr style="border-color: #4B6B99;" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="700" data-aos-delay="500">
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
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
                        <img src="{{ asset('tema/tema-1/images/photos-videos/34a41eb8-f115-430b-8384-165f671ab776_bride1.png') }}"
                            alt="">
                    </div>
                    <i class="fa-solid fa-heart text-3xl text-[#4B6B99] px-5" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500"></i>
                    <div class="w-20 h-20 rounded-full overflow-hidden" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        <img src="{{ asset('tema/tema-1/images/photos-videos/34a41eb8-f115-430b-8384-165f671ab776_bride2.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="mt-5 text-sm">
                        <div class="font-bold font-croissant text-[#4B6B99]">
                            Teddy Prakarsa
                        </div>
                        <div class="font-montserrat text-gray-600 my-1">
                            Putra ke-2 Bpk. Samuel &amp; Ibu Masuya
                        </div>
                        <a href="https://instagram.com/teddy_profile" target="_blank" class="text-[#4B6B99]">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                    </div>
                    <div class="my-5 text-[#4B6B99] text-2xl font-croissant">
                        &
                    </div>
                    <div class="text-sm">
                        <div class="font-bold font-croissant text-[#4B6B99]">
                            Ajeng Febrian
                        </div>
                        <div class="font-montserrat text-gray-600 my-1">
                            Putri ke-1 Bpk. Sumarni &amp; Ibu Maryati
                        </div>
                        <a href="https://instagram.com/ajeng_profile" target="_blank" class="text-[#4B6B99]">
                            <i class="fab fa-instagram text-3xl"></i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="text-center mt-10 font-montserrat text-[#4B6B99]" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    <div id="formattedDate" class="text-lg font-semibold">
                        Waktu Menuju Acara
                    </div>
                    <div id="countdown" class="text-center mt-10 flex justify-center space-x-5">
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
            <div class="mx-auto my-28">
                <div
                    class="grid grid-cols-1 gap-6 text-center items-center mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                    <div class="text-[#4B6B99] text-2xl font-bold mb-5 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        Akad Nikah
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="text-lg font-medium">
                            <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                Selasa
                            </div>
                        </div>
                        <div class="text-gray-600 my-5">
                            <div class="text-5xl font-extrabold">
                                19
                            </div>
                            <div class="text-sm font-light mt-5">
                                November
                            </div>
                        </div>
                        <div class="text-lg font-medium">
                            <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                2024
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
                                8:00 AM - 10:00 PM WIB
                            </div>
                            <br>
                            <div class="text-gray-700 pb-1 font-bold">
                                Nama Tempat
                            </div>
                            <div class="text-gray-700">
                                Alamat Akad
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-center text-center items-center text-sm ">
                            <a class="bg-[#4B6B99] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150"
                                href="https://maps.app.goo.gl/Dhym5MrmAGv1h7Ms5" target="_blank">
                                <i class="fas fa-map-marker-alt mb-2"></i>
                                <br>
                                Google Map
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-6 text-center items-center mt-10 mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                    <div class="text-[#4B6B99] text-2xl font-bold mt-10 mb-5 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                        Resepsi
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="text-lg font-medium">
                            <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                Selasa
                            </div>
                        </div>
                        <div class="text-gray-600 my-5">
                            <div class="text-5xl font-extrabold">
                                19
                            </div>
                            <div class="text-sm font-light mt-5">
                                November
                            </div>
                        </div>
                        <div class="text-lg font-medium">
                            <div class="bg-[#4B6B99] text-white py-2 px-4 rounded-lg">
                                2024
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
                                8:00 AM - 10:00 PM WIB
                            </div>
                            <br>
                            <div class="text-gray-700 pb-1 font-bold">
                                Alamat
                            </div>
                            <div class="text-gray-700">
                                Alamat Resepsi
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-center text-center items-center text-sm">
                            <a class="bg-[#4B6B99] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150"
                                href="https://maps.app.goo.gl/Dhym5MrmAGv1h7Ms5" target="_blank">
                                <i class="fas fa-map-marker-alt mb-2"></i>
                                <br>
                                Google Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Live -->
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
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                        data-aos-delay="500">
                        <div class="text-sm">
                            <div class="text-gray-700">
                                Pukul
                            </div>
                            <div class="text-gray-700">
                                8:00 AM - 10:00 PM WIB
                            </div>
                            <br>
                            <div class="text-gray-700 pb-1 font-bold">
                                Aplikasi
                            </div>
                            <div class="text-gray-700">
                                Instagram
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-center text-center items-center text-sm">
                            <a href="https://youtube.com" target="__blank"
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

    <!-- Galeri & Cerita -->
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
                <div class="text-[#4B6B99] text-2xl font-bold mb-10 font-croissant text-center" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Galeri
                </div>
                <video controls class="w-full rounded" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <source src="video.mp4" type="video/mp4">
                </video>
                <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 py-5">
                        <img src="{{ asset('tema/tema-1/images/photos-videos/5EPWoWDWZ6FknH0LZWITi7Dd9p1cH5BNU7IVpv7W.jpg') }}"
                            alt="Foto 1" class="w-full h-28 object-cover rounded cursor-pointer"
                            onclick="openModal('{{ asset('tema/tema-1/images/photos-videos/5EPWoWDWZ6FknH0LZWITi7Dd9p1cH5BNU7IVpv7W.jpg') }}')">
                        <img src="{{ asset('tema/tema-1/images/photos-videos/NiAqKmyorVlBNQwfgFpWaE7RtkjoHFCxgpmA4TOO.jpg') }}"
                            alt="Foto 2" class="w-full h-28 object-cover rounded cursor-pointer"
                            onclick="openModal('{{ asset('tema/tema-1/images/photos-videos/NiAqKmyorVlBNQwfgFpWaE7RtkjoHFCxgpmA4TOO.jpg') }}')">
                        <img src="{{ asset('tema/tema-1/images/photos-videos/cover.jpg') }}" alt="Foto 3"
                            class="w-full h-28 object-cover rounded cursor-pointer"
                            onclick="openModal('{{ asset('tema/tema-1/images/photos-videos/cover.jpg') }}')">
                    </div>
                </div>
                <div class="text-[#4B6B99] text-2xl font-bold font-croissant mt-10 text-center" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">Cerita</div>
                <div class="text-center text-sm py-5 font-montserrat" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari
                    jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya
                    diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda bagi kaum yang berfikir.
                </div>
                <div class="text-center pb-5 text-lg font-semibold font-croissant text-[#4B6B99]" data-aos="fade-left"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Ar Rum: 21
                </div>
                <br>
                <div class="ml-[15px]" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="bg-white rounded-lg shadow-md text-center border"
                        style="filter: drop-shadow(-15px 15px 2px #4B6B99);">
                        <div class="bg-[#4B6B99] text-white font-bold font-montserrat p-4 rounded-t-lg">
                            Pertemuan Pertama
                        </div>
                        <div class="p-4 text-sm font-montserrat">
                            Cerita untuk pertemuan pertama dapat ditambahkan di sini.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ucapan & Doa -->
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
            <div class="mx-auto my-5">
                <h2 class="text-center text-[#4B6B99] text-2xl font-bold mb-10 font-croissant" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Ucapan & Doa
                </h2>
                <form action="#" method="POST" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
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
                    <div class="text-center" data-aos="fade-up" data-aos-easing="ease-in-sine"
                        data-aos-duration="700" data-aos-delay="500">
                        <button type="submit"
                            class="text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                            style="background-color: #4B6B99;">
                            <span>
                                Kirim
                            </span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <div class="bg-gray-50 p-4 rounded-lg shadow-inner border mt-10"
                    style="max-height: 300px; overflow-y: auto;" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <div class="mb-4 p-5 bg-white rounded-lg shadow">
                        <h4 class="font-bold font-croissant">
                            John Doe
                        </h4>
                        <p class="text-gray-600 font-montserrat text-sm pt-1">
                            Semoga sukses selalu dan diberikan kesehatan. Amin!
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow">
                        <h4 class="font-bold font-croissant">
                            Jane Doe
                        </h4>
                        <p class="text-gray-600 font-montserrat text-sm pt-1">
                            Selamat dan semoga hari-harimu dipenuhi dengan berkah dan kebahagiaan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <form action="#" method="#" data-aos="fade-up" data-aos-easing="ease-in-sine"
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
                                <li class="rounded-t-lg py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Ya, Saya akan datang')">
                                    Ya, Saya akan datang
                                </li>
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                    Maaf, Saya tidak bisa datang
                                </li>
                                <li class="rounded-b-lg py-2 px-3 cursor-pointer hover:bg-[#4B6B99] hover:text-white"
                                    onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                    Saya belum tahu bisa datang atau tidak
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-easing="ease-in-sine"
                        data-aos-duration="700" data-aos-delay="500">
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
                <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500">
                    <div class="text-sm text-center font-montserrat mt-5 mb-3 px-2">
                        Kami menerima kado pernikahan dalam bentuk digital di bawah ini :
                    </div>
                    <br>
                    <div class="w-full mb-4 text-center">
                        <p class="mt-1 text-gray-800 font-montserrat">
                            Nama Bank
                        </p>
                        <p class="mt-1 text-gray-800 font-montserrat">
                            Nama Pemilik Rekening
                        </p>
                        <p id="nomor_rekening" class="mt-1 text-gray-800 font-montserrat">
                            1234567890
                        </p>
                    </div>
                </div>
                <div class="mt-5 text-center" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <button id="copyButton" type="button" onclick="copyToClipboard()"
                        class="text-sm text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                        style="background-color: #4B6B99;">
                        <span>
                            Salin Nomor Rekening
                        </span>
                        <i class="fas fa-copy text-lg ml-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
                <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    <div class="text-sm font-montserrat">
                        Atas kehadiran dan do’a restu dari Bapak/Ibu/Saudara/i sekalian, kami mengucapkan Terima Kasih.
                    </div>
                    <div class="tet-sm text-[#4B6B99] font-croissant mt-5">
                        Wassalamu’alaikum Wr. Wb.
                    </div>
                </div>
                <img src="
                {{ asset('tema/tema-1/images/photos-videos/cover.jpg') }}"
                    alt="Profile Picture" class="rounded-full w-40 h-40 mx-auto object-cover my-10"
                    data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="700"
                    data-aos-delay="500" />
                <div class="text-sm font-montserrat" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    Kami yang berbahagia
                </div>
                <div class="text-2xl font-bold mt-3 font-croissant text-[#4B6B99]" data-aos="fade-left"
                    data-aos-easing="ease-in-sine" data-aos-duration="700" data-aos-delay="500">
                    Ajeng & Teddy
                </div>
                <div class="mt-10 font-montserrat text-gray-600" data-aos="zoom-out" data-aos-easing="ease-in-sine"
                    data-aos-duration="700" data-aos-delay="500">
                    <a href="http://undangan.test/" target="_blank">
                        <button
                            class="rounded text-sm mt-5 py-2 px-6 text-white focus:outline-none focus:ring-2 focus:ring-[#4B6B99] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                            style="background-color: #4B6B99;">
                            Created with <i class="fa-solid fa-heart text-white"></i> by WeInvite
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Foto -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
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
                <div class="p-4 md:p-10">
                    <img id="modal-image" class="w-full h-auto object-cover rounded" src=""
                        alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div id="navbar"
        class="fixed bottom-0 left-1/2 transform -translate-x-1/2 z-20 w-full max-w-[500px] border-t border-gray-300 h-16 font-average bg-white/70 backdrop-blur hidden">
        <!-- Musik -->
        <audio id="background-music" loop autoplay>
            <source src="{{ asset('tema/tema-1/music/Yiruma, (이루마) - Kiss the Rain.mp3') }}" type="audio/mpeg">
        </audio>

        <!-- Tombol Musik -->
        <button id="music-control"
            class="fixed top-[-4.1rem] right-4 z-30 text-[#4B6B99] bg-white py-3 px-4 rounded-full shadow-lg transition duration-200 ease-in-out transform focus:scale-110">
            <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        </button>

        <!-- Kontrol Musik -->
        <div id="music-controls"
            class="fixed top-[-11.5rem] right-6 mt-5 mr-5 z-20 bg-[#87ace0] p-4 rounded-lg shadow-xl hidden">
            <p id="music-title" class="text-white font-semibold text-lg mb-2">Kiss the Rain</p>
            <div class="flex items-center mt-4">
                <button id="pause-button"
                    class="bg-[#4B6B99] text-white py-2 px-4 rounded transform transition duration-200 hover:scale-120">
                    Pause
                </button>
                <input id="volume-control" type="range" min="0" max="1" step="0.1"
                    value="1" class="h-2 bg-white rounded-lg appearance-none cursor-pointer ml-4">
            </div>
        </div>

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

</body>

</html>
