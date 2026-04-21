@props(['value' => null])

@php
    $text = $value ?? $slot;
@endphp

<label {{ $attributes->class('block font-medium text-sm text-gray-700') }}>
    {{ $text }}
</label>
