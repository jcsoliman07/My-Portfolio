
@props(['title'])

<a  {{ $attributes->merge(['class' => 'nav-link text-dark transition duration-300']) }} ><span>{{ $slot }}</span></a>