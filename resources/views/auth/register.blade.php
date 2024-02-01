<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf

        <!-- Name -->
        <x-form.input name="name" labelname="Name" />

        <!-- Email Address -->
        <x-form.input name="email" labelname="Email" />

        <!-- Password -->
        <x-form.input name="password" type="password" labelname="Password" />

        <!-- Confirm Password -->
        <x-form.input name="password_confirmation" type="password" labelname="Password Confirmation" />

        <div class="flex flex-col items-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-form.button>Register</x-form.button>
        </div>
    </form>
</x-guest-layout>
