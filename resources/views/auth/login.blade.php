<x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="w-full">
        @csrf

        <!-- Email Address -->
        <div class="relative">
            <x-text-input
                id="email"
                class="block mt-1 w-full @error('email')
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

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-white dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <div class="flex items-center justify-end mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm px-2 text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <x-primary-button class="w-full flex justify-center mt-4">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-guest-layout>
