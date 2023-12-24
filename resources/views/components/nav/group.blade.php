@props([
    'label' => '',
    'icon' => '',
    'route' => '',
])

@php
    $openState = Route::is($route . '*') ? '{ isOpen: true }' : '{ isOpen: false }';
@endphp

<div class="block" x-data="{{ $openState }}">
    <div @click="isOpen = !isOpen"
        class="flex items-center justify-between px-2 py-2 text-gray-100 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:bg-slate-800 dark:hover:text-slate-50 hover:bg-gray-100 hover:text-gray-900">
        <div>
            @if ($icon)
                <i class="{{ $icon }} pr-1"></i>
            @endif
            <span>{{ $label }}</span>
        </div>

        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>


    </div>
    <div x-transition:enter.duration.500ms x-transition:leave.duration.300ms x-show.transition x-show="isOpen"
        class="text-sm">
        {{ $slot }}
    </div>
</div>
