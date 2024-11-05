<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WeInvite</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <!-- Preline -->
    <script src="./node_modules/preline/dist/preline.js"></script>

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <style>
        [x-cloak] {
            display: none;
        }

        html {
            scroll-behavior: smooth;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #D1D5DB;
            border-radius: 0.5rem;
            z-index: 10;
        }

        .dropdown-item {
            padding: 0.625rem 1rem;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #1F2937;
            color: white;
        }

        .icon {
            position: absolute;
            right: 0.65rem;
            top: 50%;
            transform: translateY(-50%);
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
    </style>
</head>

<body class="font-average antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script>
        function toggleDropdown(buttonId, menuId) {
            const dropdownButton = document.getElementById(buttonId);
            const dropdownMenu = document.getElementById(menuId);

            if (dropdownButton) {
                dropdownButton.addEventListener("click", () => {
                    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
                });

                document.addEventListener("click", function(event) {
                    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.style.display = "none";
                    }
                });
            }
        }

        toggleDropdown("dropdownButtonTambah", "dropdownMenuTambah");

        document.querySelectorAll('[id^="dropdownButtonEdit-"]').forEach((button) => {
            const buttonId = button.id;
            const menuId = buttonId.replace("Button", "Menu");
            toggleDropdown(buttonId, menuId);
        });

        function selectOption(value, buttonId, inputId) {
            const dropdownButton = document.getElementById(buttonId);
            const hiddenInput = document.getElementById(inputId);

            if (dropdownButton && hiddenInput) {
                dropdownButton.querySelector('span').textContent = value;
                hiddenInput.value = value;

                const dropdownMenu = document.getElementById(buttonId.replace("Button", "Menu"));
                dropdownMenu.style.display = "none";
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            const modalContent = modal.querySelector('.relative');

            gsap.to(modalContent, {
                scale: 0.75,
                opacity: 0,
                duration: 0.3,
                onComplete: () => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            const successModal = document.getElementById('successModal');
            const errorModal = document.getElementById('errorModal');

            if (successModal && '{{ session('success') }}') {
                successModal.classList.remove('hidden');
                successModal.classList.add('flex');
                document.body.classList.add('overflow-hidden');

                const modalContent = successModal.querySelector('.relative');
                gsap.fromTo(modalContent, {
                    scale: 0.75,
                    opacity: 0
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.2
                });
            }

            if (errorModal && '{{ session('error') }}') {
                errorModal.classList.remove('hidden');
                errorModal.classList.add('flex');
                document.body.classList.add('overflow-hidden');

                const modalContent = errorModal.querySelector('.relative');
                gsap.fromTo(modalContent, {
                    scale: 0.75,
                    opacity: 0
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.2
                });
            }
        });

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

        function closeModalFoto() {
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

        function copyQuote(author, quote) {
            document.getElementById('author').value = author;
            document.getElementById('quoteText').value = quote;
        }

        function copyLink(link, buttonId) {
            const tempTextArea = document.createElement("textarea");
            tempTextArea.value = link;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);

            const button = document.getElementById(buttonId);
            button.innerHTML = ' <i class="fas fa-check mr-1"></i><span>Link Berhasil Disalin!</span>';

            setTimeout(() => {
                button.innerHTML = ' <i class="fas fa-copy mr-1"></i><span>Copy Link</span>';
            }, 3000);
        }

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
