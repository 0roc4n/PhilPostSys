<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div  class="flex justify-center items-center mb-10 mt-6">
        <img src="{{ asset('assets/PHLPOSTLogo.png') }}" alt="PhilPostLogo" class="h-10 fill-current text-gray-800" /> 
    </div>

    <div class="login-form-container flex justify-center mt-5"> <!-- Added mt-10 to add margin at the top -->
        <div class="left w-full">
                <form method="POST" action="{{ route('verify-root-account') }}">
                    @csrf
                    <h1 class="text-gray-500 text-sm font-semibold flex justify-center mb-4"> To set up an account, log in using the root account.</h1>
                    <div>

                    <div class="form-group relative mb-3 w-full">
                        <x-text-input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10" placeholder=" " required/>
                        <label for="email" :value="__('Root Account Email')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Root Account Email</label> 
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group relative mb-5">
                        <x-text-input type="password" id="password" name="password" required autocomplete="current-password" class="block mt-1 text-dark form-control block px-3 pb-2.5 pt-3 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10 w-full" placeholder=" " required/>
                        <label for="password" :value="__('Root Account Password')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Root Account Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    

                    <div class="flex justify-center mt-5">
                        <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-900" style="border-radius: 15px;">
                            {{ __('Verify') }}
                        </x-primary-button>
                    </div>

                </form>
        </div>
    </div>
</x-guest-layout>