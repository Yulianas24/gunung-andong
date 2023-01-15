@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav nav-active'
            : 'nav nav-inactive';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
