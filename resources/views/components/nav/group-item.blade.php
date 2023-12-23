@props([
    'route' => '',
    'icon' => '',
])
<a wire:navigate href="{{ route($route) }}"
    class="block py-2 px-4 {{ url()->current() == route($route) ? 'text-white dark:text-white hover:bg-gray-50 rounded-lg font-medium dark:hover:text-white hover:text-gray-800' : '' }} hover:bg-gray-50 hover:text-slate-800 dark:hover:text-slate-50 dark:text-gray-400 text-slate-50 dark:hover:bg-slate-800  rounded-lg cursor-pointer">
    @if ($icon)
        <i class="{{ $icon }} pr-1"></i>
    @endif
    <span>{{ $slot }}</span>
</a>
