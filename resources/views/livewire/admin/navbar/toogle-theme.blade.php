<button type="button" x-bind:class="darkMode ? 'bg-indigo-800/50' : 'bg-gray-200'" x-on:click="darkMode = !darkMode"
    class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out border-2 border-transparent rounded-full cursor-pointer w-11 "
    role="switch" aria-checked="false">
    <span class="sr-only">Dark mode toggle</span>
    <span x-bind:class="darkMode ? 'translate-x-5 bg-primary' : 'translate-x-0 bg-white'"
        class="relative inline-block w-5 h-5 transition duration-200 ease-in-out transform rounded-full shadow pointer-events-none ring-0">
        <span x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
            class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-primary" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
            </svg>
        </span>
        <span x-bind:class="darkMode ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
            class="absolute inset-0 flex items-center justify-center w-full h-full transition-opacity"
            aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </span>
</button>
