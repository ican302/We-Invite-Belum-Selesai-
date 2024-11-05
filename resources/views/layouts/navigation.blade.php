<!-- Primary Navigation Menu -->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 relative shadow-lg z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-40">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="block h-9 w-auto fill-current text-gray-800">
                        <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="">
                    </a>
                </div>
            </div>
            <!-- Dekstop Menu -->
            <div class="hidden sm:flex items-center justify-center flex-grow space-x-8">
                @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.tema')" :active="request()->routeIs('admin.tema')">
                            {{ __('Tema') }}
                        </x-nav-link>
                        <x-nav-link :href="route('admin.cs')" :active="request()->routeIs('admin.cs')">
                            {{ __('Customer Service') }}
                        </x-nav-link>
                    @elseif (Auth::user()->role === 'user')
                        <x-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('user.undangan')" :active="request()->routeIs('user.undangan')">
                            {{ __('Undangan') }}
                        </x-nav-link>
                        <x-nav-link :href="route('user.cs')" :active="request()->routeIs('user.cs')">
                            {{ __('Customer Service') }}
                        </x-nav-link>
                    @endif
                @endif
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6" x-data="{ open: false }">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-800 hover:text-black focus:outline-none focus:text-black transition ease-in-out duration-150">
                            <div>{{ Auth::user()->email }}</div>
                            <div class="ms-1">
                                <!-- Icon Dropdown -->
                                <svg x-show="!open" x-cloak x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform scale-90 rotate-90"
                                    x-transition:enter-end="opacity-100 transform scale-100 rotate-0"
                                    class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <!-- Icon Dropdown Open -->
                                <svg x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform scale-90 rotate-90"
                                    x-transition:enter-end="opacity-100 transform scale-100 rotate-0"
                                    class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 12.707a1 1 0 011.414 0L10 9.414l3.293 3.293a1 1 0 001.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <!-- Mobile Menu Button -->
            <div class="-me-2 flex items-center sm:hidden z-50">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Overlay -->
    <div x-show="open" @click="open = false" x-cloak class="fixed inset-0 z-40 bg-black/80">
        <!-- Caption -->
        <p class="mt-2 text-sm text-center text-white">
            Klik pada layar kosong untuk menutup menu
        </p>
    </div>
    <!-- Mobile Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-full"
        class="fixed top-[3.75rem] right-0 mt-2 w-auto bg-white shadow-lg z-40 rounded-tl-lg rounded-bl-lg ring-1 ring-gray-200">
        <div class="py-4 px-4">
            <div class="mt-1 space-y-1">
                @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                        <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                            <i class="fa-solid fa-chart-line mr-2"></i> {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.tema')" :active="request()->routeIs('admin.tema')">
                            <i class="fas fa-palette mr-2"></i> {{ __('Tema') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.cs')" :active="request()->routeIs('admin.cs')">
                            <i class="fas fa-headset mr-2"></i> {{ __('Customer Service') }}
                        </x-responsive-nav-link>
                    @elseif (Auth::user()->role === 'user')
                        <x-responsive-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                            <i class="fa-solid fa-chart-line mr-2"></i> {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('user.undangan')" :active="request()->routeIs('user.undangan')">
                            <i class="fas fa-envelope mr-2"></i> {{ __('Undangan') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('user.cs')" :active="request()->routeIs('user.cs')">
                            <i class="fas fa-headset mr-2"></i> {{ __('Customer Service') }}
                        </x-responsive-nav-link>
                    @endif
                @endif
                <hr class="border-gray-800 border-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
