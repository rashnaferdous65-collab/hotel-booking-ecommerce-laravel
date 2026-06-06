<nav x-data="{ open: false }" class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Left Section -->
            <div class="flex items-center gap-8">

                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <x-application-logo class="h-10 w-auto text-gray-800" />
                </a>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex items-center gap-6">
                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- User Dropdown -->
            <div class="hidden sm:flex items-center">
                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button
                            class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-gray-900 transition">

                            <span>{{ Auth::user()->name }}</span>

                            <svg class="w-4 h-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>

                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>

                        </form>

                    </x-slot>

                </x-dropdown>
            </div>

            <!-- Mobile Toggle -->
            <button
                @click="open = !open"
                class="sm:hidden p-2 rounded-md text-gray-500 hover:bg-gray-100">

                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path
                        :class="{ 'hidden': open, 'block': !open }"
                        class="block"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                    <path
                        :class="{ 'block': open, 'hidden': !open }"
                        class="hidden"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />

                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="sm:hidden border-t">

        <div class="py-2">
            <x-responsive-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="border-t px-4 py-3">

            <div class="mb-3">
                <h4 class="font-semibold text-gray-800">
                    {{ Auth::user()->name }}
                </h4>

                <p class="text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </p>
            </div>

            <div class="space-y-1">

                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>
</nav>
