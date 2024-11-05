<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeInvite | @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="./node_modules/preline/dist/preline.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .bg-container {
            background-image: url('/images/5569176.jpg');
            background-size: cover;
            background-position: center;
            transform: rotate(180deg);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.7;
        }

        .bg-container-2 {
            background-image: url('/images/5581248.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.7;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            opacity: 0;
        }

        .accordion-content.show {
            max-height: 500px;
            opacity: 1;
        }

        .custom-input {
            background-color: #F9FAFB;
            border: 1px solid #D1D5DB;
            color: #000;
            border-radius: 0.5rem;
            padding: 0.625rem;
            width: 100%;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-input:focus {
            border-color: #1F2937;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.5);
            outline: none;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-bounce {
            animation: bounce 1s infinite;
        }

        .animate-bounce.delay-1 {
            animation-delay: 0.2s;
        }

        .animate-bounce.delay-2 {
            animation-delay: 0.3s;
        }

        [x-cloak] {
            display: none;
        }
    </style>

</head>

<body class="font-average antialiased">

    <x-custom-navbar></x-custom-navbar>

    <div class="min-h-full">
        <main>
            @yield('content')
        </main>
    </div>

    <x-footer></x-footer>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());

        AOS.init();

        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#carousel', {
                type: 'loop',
                autoplay: true,
                interval: 3000,
                pauseOnHover: false,
            }).mount();
        });

        function toggleAccordion(index) {
            const accordionBody = document.getElementById(`accordion-collapse-body-${index}`);
            accordionBody.classList.toggle('show');
        }

        const selectThemeButtons = document.querySelectorAll('.select-theme');

        selectThemeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const themeId = this.getAttribute('aria-controls').split('-').pop();
                const modal = document.querySelector(`#hs-scale-animation-modal-${themeId}`);
                const themeInput = modal.querySelector('#theme_id');
                themeInput.value = themeId;
            });
        });
    </script>

</body>

</html>
