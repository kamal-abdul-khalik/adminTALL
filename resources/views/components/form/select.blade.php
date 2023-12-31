@props([
    'required' => '',
    'name' => '',
    'id' => '',
    'placeholder' => '',
    'label' => '',
])

@if ($label === 'none')
@elseif ($label === '')
    @php
        //remove underscores from name
        $label = str_replace('_', ' ', $name);
        //detect subsequent letters starting with a capital
        $label = preg_split('/(?=[A-Z])/', $label);
        //display capital words with a space
        $label = implode(' ', $label);
        //uppercase first letter and lower the rest of a word
        $label = ucwords(strtolower($label));
    @endphp
@endif

<div class="mb-5">
    @if ($label != 'none')
        <label for='{{ $name }}'
            class='block mb-3 text-sm font-medium leading-5 text-gray-700 dark:text-gray-200'>{{ $label }}
            @if ($required != '')
                <span class="error">*</span>
            @endif
        </label>
    @endif
    <select name='{{ $name }}' id='{{ $name }}' {{ $required }}
        {{ $attributes->merge(['class' => 'w-full rounded-lg border border-gray-300 dark:border-slate-700 py-2 px-3 outline-0 dark:bg-slate-900 text-slate-700 transition duration-200 focus:border-blue-300 focus:ring-4 focus:ring-indigo-100 focus:dark:ring-blue-800 dark:text-slate-300 sm:text-sm']) }}>
        @if ($placeholder != '')
            <option value=''>{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
