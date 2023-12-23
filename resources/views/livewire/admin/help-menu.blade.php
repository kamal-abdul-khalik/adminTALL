<div x-data="{ isOpen: false }">
    <div>
        <button @click="isOpen = !isOpen" class="px-2 pt-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>

        </button>
    </div>

    <div x-show.transition="isOpen" @click.away="isOpen = false" class="absolute w-48 origin-top-right right-14">
        <div class="relative z-30 bg-white border border-gray-100 shadow-xs rounded-b-md dark:bg-gray-700">
            <x-dropdown-link href="http://laraveladmintw.com/docs">{{ __('Theme Docs') }}</x-dropdown-link>
        </div>

    </div>
</div>
