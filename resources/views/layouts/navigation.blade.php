<nav x-data="{ open: false }" class="bg-[#181a1b] border-b border-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                        {{ __('Admin') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.articles')" :active="request()->routeIs('admin.articles')">
                        {{ __('Actualités') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.packages')" :active="request()->routeIs('admin.packages')">
                        {{ __('Forfaits') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.activities')" :active="request()->routeIs('admin.activities')">
                        {{ __('Activités') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.reservations')" :active="request()->routeIs('admin.reservations')">
                        {{ __('Réservations') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-[#e5f0ff]">
                            <div>{{ Auth::user()->first_name }}</div>
                            <img class="w-8 ml-2"
                                src="{{ asset('images/user_profile/' . Auth::user()->profile_picture) }}"
                                alt="">
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <form method="GET" action="{{ route('admin') }}">
                            @csrf
                            <x-dropdown-link :href="route('admin')">
                                {{ __('Admin') }}
                            </x-dropdown-link>
                        </form>
                        <form method="GET" action="{{ route('account') }}">
                            <x-dropdown-link :href="route('account')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </form>
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
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                {{ __('Admin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('account')" :active="request()->routeIs('account')">
                {{ __('Profile') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.articles')" :active="request()->routeIs('admin.articles')">
                {{ __('Actualités') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
