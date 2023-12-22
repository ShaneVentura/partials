<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center absolute inset-y-0 right-0 mr-16 ">

        <div class="bg-blue-dark rounded-xl shadow-sm mr-14 bg-opacity-20" style="width: full; padding:45px">
            <!-- Adjust the width -->

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="-mt-5">
                    <span class="text-4xl font-openSans font-medium opacity-80 text-black-light tracking-tight">
                        Login to your
                    </span>

                    <span class="text-4xl font-openSans font-normal opacity-80 text-black-light ">
                        Account
                    </span>

                    <div class="-mt-2">
                        <span
                            class="font-openSans text-black-light opacity-90 font-medium text-2xl tracking-wide ">Don't
                            have an account?
                        </span>
                        <a href="http://localhost:8000/register"
                            class="font-openSans text-blue opacity-90 font-medium text-2xl tracking-tighter hover:underline ">Create
                            one here
                        </a>
                    </div>

                    <!-- Username or Email -->
                    <div class="mt-4">
                        <x-input-label for="login" :value="__('Email or Username')" class= />

                        <x-text-input class="text-xl" id="login" type="text" name="login" :value="old('login')"
                            required autofocus autocomplete="username" placeholder="iKuryente@gmail.com" />

                        <x-input-error :messages="$errors->get('login')" class="mt-3 text-lg" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="text-xl mt-1 " type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-3 text-lg" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-7">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-base text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-2">

                        <x-primary-button class="ms-2">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
