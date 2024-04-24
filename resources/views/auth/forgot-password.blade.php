<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-form-container flex justify-center"> <!-- Added mt-10 to add margin at the top -->

        <div class="w-1/2 mt-10">
            <img class="h-auto w-1/2 ml-10" src="{{ asset('assets/forgotpassword.jpg') }}" alt="phlpost"/>
        </div>

        <div class="w-1/2 mr-7 ml mt-10">
            <div class="mb-4 text-sm text-gray-600">
                <h1 class="flex justify-center font-bold text-xl mb-2"> Forgot Password</h1>
                <p class="flex justify-center">Enter your and will send you a link to rest your password</p>
            </div>

            <!-- Session Status -->

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="flex justify-center">
                    <div class="form-group relative mb-3 w-full">
                        <x-text-input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="block mt-1 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-400 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-10" placeholder=" " required/>
                        <label for="email" :value="__('Email')" class="absolute text-xs text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label> 
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ms-3 bg-blue-700 hover:bg-blue-900" style="border-radius: 15px;">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>