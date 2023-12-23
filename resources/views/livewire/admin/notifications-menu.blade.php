<div x-data="{ isOpen: false }">
    @can('view_notifications')

        <button wire:click="open" @click="isOpen = !isOpen" class="pt-2 focus:outline-none">
            <div class="relative pl-2">
                @if ($unseenCount > 0)
                    <span
                        class="absolute top-0 block w-4 h-4 text-xs text-white bg-red-500 rounded-full left-4 ring-2 ring-white"
                        aria-hidden="true">{{ $unseenCount }}</span>
                @endif

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                </svg>

            </div>
        </button>

        <div x-show.transition="isOpen" class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title"
            role="dialog" aria-modal="true">
            <div class="absolute inset-0 overflow-hidden transition-opacity bg-gray-500 bg-opacity-75">

                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">

                    <div class="w-screen max-w-md">
                        <div
                            class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl dark:bg-gray-700 dark:text-gray-300">

                            <div class="p-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="mb-0 text-lg font-medium text-gray-900 dark:text-gray-300">
                                        {{ __('Notifications') }}</h2>
                                    <div class="flex items-center ml-3">
                                        <button @click="isOpen = !isOpen"
                                            class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
                                            <span class="sr-only">{{ __('Close panel') }}</span>
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="border-b border-gray-200"></div>

                            <ul class="flex-1 overflow-y-auto divide-y divide-gray-200">

                                @if (count($notifications) === 0)
                                    <li class="p-6">{{ __('No notifications yet.') }}</li>
                                @else
                                    @foreach ($notifications as $notification)
                                        <li class="relative px-6 py-5">
                                            <div class="flex items-center justify-between group">
                                                @if (!empty($notification->link))
                                                    <a wire:navigate href="{{ $notification->link }}"
                                                        class="block p-1 -m-1">
                                                @endif

                                                <div class="absolute inset-0 group-hover:bg-gray-50 dark:group-hover:bg-gray-500"
                                                    aria-hidden="true"></div>

                                                <div class="relative flex items-center flex-1 min-w-0">

                                                    <span class="relative flex-shrink-0 inline-block">
                                                        @if (!empty($notification->assignedFrom->image))
                                                            <img class="w-10 h-10 rounded-full"
                                                                src="{{ storage_url($notification->assignedFrom->image) }}"
                                                                alt="{{ $notification->assignedFrom->name }}">
                                                        @endif
                                                    </span>

                                                    <div class="ml-4">
                                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-200">
                                                            {{ $notification->title }}</p>
                                                        <p class="text-sm text-gray-500 dark:text-gray-200">
                                                            {{ $notification->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                                @if (!empty($notification->link))
                                                    </a>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endcan
</div>
