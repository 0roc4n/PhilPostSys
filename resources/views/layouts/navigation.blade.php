<nav x-data="{ open: false }" class="px-4 sm:px-10 bg-white border-b shadow-sm border-gray-100 sticky top-0 z-40">
    <style>
        .flex {
            border-radius: 100px;
        }

        .nav-text {
            margin-left: -35px;
        }
        .rounded {
            border-radius: 11px !important;
        }
    </style>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <!-- Logo -->
        <div>
            <img src="{{ asset('assets/PHLPOSTLogo.png') }}" alt="PhilPostLogo" class="h-6 fill-current text-gray-800" />
        </div>

        <!-- Title -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <span style="font-weight:900; font-size: 19px;">PHILPOST </span> &nbsp;
            <span style="font-weight: medium; color: #888; font-size: 19px;">RRR Tracking</span>
        </div>
        <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

        <!-- Hamburger -->
        <div class="lg:hidden flex items-center">
            <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
        <div class="p-2 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="fa-solid fa-chart-simple mr-4"></i>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('tracer')" :active="request()->routeIs('tracer')">
                <i class="fa-solid fa-magnifying-glass mr-3"></i>
                {{ __('Trace Transmittals') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('add_transmittal')" :active="request()->routeIs('add_transmittal')">
                <i class="fa-solid fa-pen-nib mr-3"></i>
                {{ __('Add New Transmittal') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('new-addressee')" :active="request()->routeIs('new-addressee')">
                <i class="fa-solid fa-plus mr-3"></i>
                {{ __('Add New Addressee') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-2 space-y-1">
            <x-responsive-nav-link :href="route('show-addressee')" :active="request()->routeIs('show-addressee')">
                <i class="fa-solid fa-book mr-3"></i>
                {{ __('Addressee List') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-gray-900 bg-opacity-50 sm:hidden"></div> -->
<div class="hidden lg:block fixed bottom-0 w-full md:w-1/6 bg-white md:h-screen lg:pt-16" :class="{ '-translate-x-full': !open, 'translate-x-0': open }">
    <div class="lg:block hidden text-black mt-3">
        <div class="hover:bg-gray-300 rounded mx-3 text-sm">
            <a href="{{ route('dashboard') }}" class="flex items-center p-2 mb-1 {{ Request::is('dashboard') ? 'bg-blue-600 text-white rounded' : 'text-gray-700' }} hover:text-black">
                <i class="fa-solid fa-chart-simple mr-4 ml-2"></i>
                {{ __('Dashboard') }}
            </a>
        </div>
        <div class="hover:bg-gray-300 rounded mx-3 text-sm">
            <a href="{{ route('tracer') }}" class="flex items-center p-2 mb-1 {{ Request::is('tracer') ? 'bg-blue-600 text-white rounded' : 'text-gray-700' }} hover:text-black">
                <i class="fa-solid fa-magnifying-glass mr-3 ml-2"></i>
                {{ __('Trace Transmittals') }}
            </a>
        </div>
        <div class="hover:bg-gray-300 rounded mx-3 text-sm">
            <a href="{{ route('add_transmittal') }}" class="flex items-center p-2 mb-1 {{ Request::is('add_transmittal') ? 'bg-blue-600 text-white rounded' : 'text-gray-700' }} hover:text-black">
                <i class="fa-solid fa-pen-nib mr-3 ml-2"></i>
                {{ __('Add New Transmittal') }}
            </a>
        </div>
        <div class="hover:bg-gray-300 rounded mx-3 text-sm">
            <a href="{{ route('new-addressee') }}" class="flex items-center p-2 mb-1 {{ Request::is('new-addressee') ? 'bg-blue-600 text-white rounded' : 'text-gray-700' }} hover:text-black">
                <i class="fa-solid fa-plus mr-3 ml-2"></i>
                {{ __('Add New Addressee') }}
            </a>
        </div>
        <div class="hover:bg-gray-300 rounded mx-3 text-sm">
            <a href="{{ route('show-addressee') }}" class="flex items-center p-2 {{ Request::is('show-addressee') ? 'bg-blue-600 text-white rounded' : 'text-gray-700' }} hover:text-black">
                <i class="fa-solid fa-book mr-3 ml-2"></i>
                {{ __('Addressee List') }}
            </a>
        </div>
    </div>
</div>
