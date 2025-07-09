
@props(['variant' => 'default'])

@php
    $styles = match($variant)
    {
        'gradient' => 'text-3xl md:text-4xl font-bold gradient-text mb-2',
        'default' =>  'text-2xl md:text-3xl font-semibold text-gray-700 mb-6'
    }
@endphp

<h2 class="{{ $styles }}">{{ $slot }}</h2>