<x-app-layout>
    <div class="flex form-content bg-white w-full mt-10 justify-center">

        <div class="w-1/2 mt-5 mb-5">
            <x-slot name="logo">
            </x-slot>
            <!-- Session Status -->
            <h1 class="h-10 text-2xl mb-4">Login</h1>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
                <div class="">
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email" class="w-full rounded-xs border-none px-4 py-2 bg-gray-200 pl-8" type="email"
                             name="email" :value="old('email')" required autofocus/>
                </div>

                <!-- Password -->
                <div class="">
                    <x-label for="password" :value="__('Password')"/>

                    <x-input id="password" class="w-full rounded-xs border-none px-4 py-2 bg-gray-200 pl-8"
                             type="password"
                             name="password"
                             required autocomplete="current-password"/>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                               name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
            <x-auth-session-status class="mb-4" :status="session('status')"/>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
        </div>
    </div>
</x-app-layout>
