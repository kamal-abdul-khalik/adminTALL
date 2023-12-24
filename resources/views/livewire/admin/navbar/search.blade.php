<div>
    @can('view_search')
        <form action="#" method="get" class="m-0">
            <div class="w-56 rounded-md md:w-96">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input wire:model.live="query" type="search"
                        class="w-full px-3 py-2 pl-10 transition duration-200 border border-gray-300 rounded-lg dark:border-slate-700 outline-0 dark:bg-slate-900 focus:border-blue-300 focus:ring-4 focus:ring-indigo-100 focus:dark:ring-blue-800 dark:text-slate-300 sm:text-sm"
                        placeholder="{{ __('Search') }}">
                </div>
            </div>

            @if (strlen($query) > 2)
                <ul
                    class="absolute z-50 mt-2 text-sm text-gray-700 bg-white border border-gray-300 divide-y divide-gray-200 rounded-md dark:bg-gray-500 dark:text-gray-200 dark:border-gray-400 w-96">

                    @foreach ($searchResults as $result)
                        <li class="p-1">
                            <a wire:navigate href="{{ $result['route'] }}"
                                class="flex items-center px-4 py-4 transition duration-150 ease-in-out hover:bg-gray-200 dark:hover:bg-gray-600">{{ $result['section'] }}:
                                {{ $result['label'] }}</a>
                        </li>
                    @endforeach

                    @if (count($searchResults) === 0)
                        <li class="p-1">{{ __('No results') }}</li>
                    @endif
                </ul>
            @endif

        </form>
    @endcan
</div>
