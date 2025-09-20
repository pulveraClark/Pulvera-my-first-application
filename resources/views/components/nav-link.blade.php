@props(['active' => false])

@php
$classes = $active
    ? 'text-gray-900 font-medium border-b-2 border-gray-900 pb-1'
    : 'text-gray-500 hover:text-gray-900 pb-1 transition-colors';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
