@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center overflow-hidden justify-start w-full pl-5 p-2 my-1 text-red uppercase transition-colors duration-200 rounded-lg odc-glass-active
            hover:opacity-1
            dark:from-gray-700 dark:to-gray-800'
            : 'odc-glass flex items-center overflow-hidden justify-start w-full pl-5 p-2 my-2 text-bold text-gray-light uppercase transition-colors duration-100 rounded-lg
            hover:text-red dark:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
