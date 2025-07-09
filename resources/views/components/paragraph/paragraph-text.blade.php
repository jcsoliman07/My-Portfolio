
@props(['variant' => 'default'])

@php
    $styles = match ($variant) {
        'default' => 'text-gray-600 mb-8 max-w-lg',
        'centered' => 'max-w-2xl mx-auto text-gray-600',
    }
@endphp


<p class="{{ $styles }}">
    {{ $slot }}
</p>