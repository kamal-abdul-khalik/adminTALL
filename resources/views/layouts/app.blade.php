<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? config('app.name') }} </title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

        <div x-bind:class="{ 'dark': darkMode === true }" class="min-h-screen bg-gray-100">
            <div x-data="{ sidebarOpen: false }">
                <div class="flex min-h-screen">

                    @auth
                        <!-- regular sidebar -->
                        <div class="flex-none hidden w-full px-4 sidebar md:block md:w-60 bg-primary dark:bg-slate-900">
                            @include('layouts.navigation')
                        </div>

                        <!--sidebar on mobile-->
                        <div x-show="sidebarOpen" class="min-w-full px-4 sidebar bg-primary dark:bg-slate-900 md:hidden">
                            @include('layouts.navigation')
                        </div>
                    @endauth

                    <div id="main" class="w-full bg-gray-100 dark:bg-slate-800">

                        @auth
                            <div class="flex justify-between px-2 py-2 mb-5 bg-white top-12 dark:bg-slate-900">

                                <div class="flex">
                                    <button @click.stop="sidebarOpen = !sidebarOpen"
                                        class="pl-1 pr-2 md:hidden focus:outline-none">
                                        <svg class="w-6 text-gray-900 transition duration-150 ease-in-out dark:text-gray-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h8m-8 6h16" />
                                        </svg>
                                    </button>

                                    <livewire:admin.search />

                                </div>

                                <div class="flex items-center gap-x-2">
                                    <livewire:admin.toogle-theme />
                                    <livewire:admin.notifications-menu />
                                    <livewire:admin.help-menu />
                                    <livewire:admin.users.user-menu />
                                </div>
                            </div>
                        @endauth

                        <div class="py-5 px-7">
                            {{ $slot ?? '' }}
                        </div>
                    </div>

                </div>

                <div class="flex justify-between p-5 text-xs bg-white dark:bg-slate-900 dark:text-gray-300">
                    <div>{{ __('Copyright') }} &copy; {{ date('Y') }} {{ config('app.name') }}</div>
                </div>

            </div>
        </div>

    </body>

</html>
