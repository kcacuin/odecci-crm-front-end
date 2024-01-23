@props(['disabled' => false, 'value'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'peer h-[3rem] px-6 text-base text-white bg-gray-dark border-white border-2 rounded-lg border-opacity-75 outline-none placeholder-gray-300 placeholder-opacity-0 transition duration-200 placeholder-transparent placeholder:pointer-events-none placeholder:select-none focus:border-blue-500']) !!}>
{{--
@error('email')
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'peer h-[3rem] px-6 text-base text-white bg-gray-dark border-pink-600 border-2 rounded-lg outline-none placeholder-gray-300 placeholder-opacity-0 transition duration-200 placeholder-transparent focus:border-blue-500']) !!}>
@enderror --}}
