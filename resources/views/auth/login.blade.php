<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        
        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('google.login') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex items-center">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px"><path fill="#4285F4" d="M45.12 24.52c0-1.41-.13-2.76-.38-4.05H24v7.67h11.91c-.52 2.72-2.08 5.02-4.4 6.58v5.47h7.1c4.16-3.83 6.51-9.47 6.51-15.67z"/><path fill="#34A853" d="M24 48c6 0 11.02-1.98 14.69-5.38l-7.1-5.47c-2.02 1.37-4.57 2.18-7.59 2.18-5.83 0-10.76-3.94-12.53-9.25H4.15v5.8C7.82 43.1 15.29 48 24 48z"/><path fill="#FBBC05" d="M11.47 29.08C10.96 27.75 10.65 26.33 10.65 24.82c0-1.51.31-2.93.82-4.26V14.76H4.15C2.64 17.68 1.8 21.14 1.8 24.82s.84 7.14 2.35 10.06l7.32-5.8z"/><path fill="#EA4335" d="M24 9.55c3.26 0 6.18 1.12 8.5 3.32l6.38-6.37C34.96 2.6 30.96 1 24 1 15.29 1 7.82 5.9 4.15 13.35l7.32 5.8c1.77-5.31 6.7-9.25 12.53-9.25z"/><path fill="none" d="M0 0h48v48H0z"/></svg>
                {{ __('Se connecter avec Google') }}
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>
