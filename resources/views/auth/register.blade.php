<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="login-form-container flex justify-center mt-5"> <!-- Added mt-10 to add margin at the top -->
        <div class="left w-full">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <!-- Name -->
                    <div class="flex items-center justify-between mb-5 mt-5">
                        <div>
                            <img src="{{ asset('assets/PHLPOSTLogo.png') }}" alt="PhilPostLogo" class="h-10 fill-current text-gray-800" /> 
                        </div>
                        <div>
                            <h1 class="text-gray-500 text-md font-normal flex justify-center"> Create an Account</h1>
                        </div>
                    </div>
                    <div class="form-group relative mb-3">
                        <x-text-input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="username" class="block mt-1 w-full text-dark form-control block px-3 pb-2.5 pt-3 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10" placeholder=" " required/>
                        <label for="name" :value="__('Name')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="form-group relative mb-3 w-full">
                        <x-text-input type="email" id="email" name="email" :value="old('email')" required autocomplete="username" class="block mt-1 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10" placeholder=" " required/>
                        <label for="email" :value="__('Email')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label> 
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <!-- Password -->
                    <div class="form-group relative mb-5">
                        <x-text-input type="password" id="password" name="password" required autocomplete="new-password" class="block mt-1 text-dark form-control block px-3 pb-2.5 pt-3 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10 w-full" placeholder=" " required/>
                        <label for="password" :value="__('Password')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>


                    <!-- Confirm Password-->
                    <div class="form-group relative mb-5">
                        <x-text-input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="block mt-1 text-dark form-control block px-3 pb-2.5 pt-3 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10 w-full" placeholder=" " required/>
                        <label for="password_confirmation" :value="__('Confirm Password')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Confirm Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-center mb-8 mt-3">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button type="submit" class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
     
        </div>
    </div>
</x-guest-layout>