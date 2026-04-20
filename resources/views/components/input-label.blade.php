@props(['value' => null])

<label {{ $attributes->class(['block font-medium text-sm text-gray-700']) }}>
    {{ $value ?: $slot }}
</label>
