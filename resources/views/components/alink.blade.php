@props(['href' => '#'])

<a wire:navigate href="{{ $href }}">{{ $slot }}</a>
