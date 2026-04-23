@props([
    'type' => 'submit'
])

@php
    $baseClasses = 'inline-flex items-center px-4 py-2 border border-transparent 
                    rounded-md font-semibold text-xs text-white uppercase 
                    tracking-widest transition ease-in-out duration-150';

    $stateClasses = 'bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 
                     active:bg-gray-900 focus:outline-none focus:ring-2 
                     focus:ring-indigo-500 focus:ring-offset-2';

    $classes = $baseClasses . ' ' . $stateClasses;
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>