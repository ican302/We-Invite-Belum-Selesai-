<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex justify-center my-7">
        <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="Logo" />
    </div>
    <div class="mt-5">
        <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <input id="email" class="custom-input mt-1" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username"
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')" />
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Kata Sandi')" />
                <input id="password" class="custom-input mt-1" type="password" name="password" required
                    autocomplete="current-password" oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')" />
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <hr class="mt-4">
            <p class="mt-4 text-center text-sm">
                Belum Punya Akun?
                <a href="{{ route('register') }}" class="font-semibold leading-6 hover:underline">Daftar Di
                    Sini!</a>
            </p>
            <div class="flex items-center justify-between mt-4 mb-2">
                <x-primary-button>
                    <a href="/">
                        <i class="fa-solid fa-house mr-2"></i>
                        <span class="mr-2">
                            Beranda
                        </span>
                    </a>
                </x-primary-button>
                <x-primary-button>
                    <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>
                    <span class="mr-2">
                        {{ __('Masuk') }}
                    </span>
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
