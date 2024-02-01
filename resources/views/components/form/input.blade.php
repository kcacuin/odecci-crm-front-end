@props(['disabled' => false, 'readonly' => false, 'value' => null, 'name', 'type' => 'text', 'labelname'])

@php
    $classes = 'block mt-1 w-full peer h-[3rem] px-6 text-base text-white bg-gray-dark border-white border-2 rounded-lg border-opacity-75 outline-none placeholder-gray-300 placeholder-opacity-0 transition duration-200 placeholder-transparent placeholder:pointer-events-none placeholder:select-none focus:border-blue-500'
@endphp

<x-form.field>
    <input {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }} {!! $attributes->merge(['class' => $classes]) !!}
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="placeholder"
        {{ $attributes(['value' => $value ?? old($name)]) }}
    >

    <x-form.label name="{{ $name }}" labelname="{{ $labelname }}" />

    <x-form.error name="{{ $name }}"/>
</x-form.field>
