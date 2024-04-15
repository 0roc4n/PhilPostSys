<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Adding jQuery for simplicity -->

</head>
<body>
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="login-form-container flex justify-center mt-5"> <!-- Added mt-10 to add margin at the top -->
            <!-- First column for image -->
            <div class="w-1/2">
                <img class="h-auto w-1/2 ml-10" src="{{ asset('assets/phlpost_login1.png') }}" alt="phlpost"/>
            </div>
               
            <!-- Second column for login form -->
            <div class="w-1/2 mr-7 ml">
                <form method="POST" action="{{ route('login') }}" class="mx-auto max-w-md"> <!-- Added mx-auto and max-w-md to center the form and limit its width -->
                    @csrf

                    <h1 class="text-gray-500 text-sm font-semibold mb-4 ml-3"> Log In to PHLPOST RRR Tracking System</h1>
                    <!-- Email Address -->
                    <div class="form-group relative mb-3">
                        <x-text-input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 w-full text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10" placeholder=" " required/>
                        <label for="email" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group relative mb-5">
                        <x-text-input type="password" id="password" name="password" :value="old('email')" required autocomplete="current-password" class="block mt-1 text-dark form-control block px-3 pb-2.5 pt-3 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10 w-full" placeholder=" " required/>
                        <label for="password" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-8 mt-3"> <!-- Added justify-between to distribute space -->
                        <!-- Remember me -->
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 w-4 h-4" name="remember">
                            <div class="ms-2 text-xs text-gray-600">{{ __('Remember me') }}</div>
                        </label>
                        
                        <!-- Forgot password link -->
                        @if (Route::has('password.request'))
                            <a class="underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>
                    


                    <div class="flex justify-center mt-5">
                        <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-900" id="login-button" style="border-radius: 15px;">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
    </x-guest-layout>

    <script>
        document.getElementById("email").addEventListener("click", function() {
            // Logic to open the mail goes here
        });
    </script>
</body>
</html>
