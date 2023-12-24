@auth
    <div x-data="{ isOpen: false }">
        <div>
            <button @click="isOpen = !isOpen" class="pt-2 text-gray-900 focus:outline-none">
                @if (storage_exists(auth()->user()->image))
                    <img src="{{ storage_url(auth()->user()->image) }}" width="30" class="w-6 h-6 rounded-full">
                @else
                    {{ auth()->user()->name }}
                @endif
            </button>
        </div>

        <div x-show.transition="isOpen" @click.away="isOpen = false" class="absolute right-0 w-48 mt-1 mr-3 origin-top-right">
            <div class="relative z-30 pb-3 bg-white border rounded-md shadow-xs dark:border-slate-800 dark:bg-slate-900">

                @can('view_users_profiles')
                    <x-dropdown-link :href="route('admin.users.show', auth()->user())" wire:navigate>{{ __('View Profile') }}</x-dropdown-link>
                @endcan

                @can('edit_own_account')
                    <x-dropdown-link :href="route('admin.users.edit', auth()->user())" wire:navigate>{{ __('Edit Account') }}</x-dropdown-link>
                @endcan

                <div class="divider"></div>

                <button href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="flex w-full px-4 py-2 text-sm text-start text-slate-700 dark:text-white hover:bg-red-200 rounded-b-md dark:hover:bg-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>

                    <span class="pl-2">{{ __(' Log out') }}</span>
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="post">
                    {{ csrf_field() }}
                </form>

            </div>

        </div>
    </div>
@endauth
