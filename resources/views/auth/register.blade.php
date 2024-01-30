<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="relative">
            <x-text-input
                id="name"
                class="block mt-1 w-full @error('email')
                border-pink-600 placeholder:select-none
                @enderror"
                type="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="placeholder"
                required
                autofocus
            />
            <x-input-label for="name" :value="__('Name')"/>

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="relative">
            <x-text-input
                id="email"
                class="block mt-8 w-full @error('email')
                border-pink-600 placeholder:select-none
                @enderror"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="placeholder"
                required
                autofocus
            />
            <x-input-label for="email" :value="__('Username or email')"/>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="relative">

            <x-text-input
                class="block mt-8 w-full @error('password')
                border-pink-600
                @enderror"
                id="password"
                type="password"
                name="password"
                placeholder="placeholder"
                required
                autocomplete="current-password"
            />
            <x-input-label for="password" :value="__('Password')"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="relative">

            <x-text-input
                class="block mt-8 w-full @error('password_confirmation')
                border-pink-600
                @enderror"
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="placeholder"
                required
                autocomplete="password_confirmation"
            />
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
