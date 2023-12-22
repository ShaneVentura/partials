<div class="flex items-center place-content-between mt-8">
    <a href="http://localhost:8000/">
        <div class="flex items-center mx-28  space-x-2">
            <div>
                <img src="{{ URL('imgs/400164738_340907181921774_3802870888100654010_n-removebg (1).png') }}"
                    alt="logo" class="w-24">
            </div>

            <div>
                <h1 class="font-boldglacial font-bold text-green-light text-5xl tracking-normal">
                    iKuryente
                </h1>
            </div>

        </div>
    </a>

    <div class="hidden sm:flex sm:items-center sm:ms-6 mr-24">
        <x-dropdown align="right" width="48" contentClasses="py-1 bg-black">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2">
                    <div class="font-monsterat text-2xl text-black-light opacity-75 hover:underline">Services</div>
                    <div class="ms-2">
                        <svg class="fill-current h-5 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link>
                    {{ __('Billing Rates') }}
                </x-dropdown-link>

                <x-dropdown-link>
                    {{ __('Contact') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>


        {{-- Sign Up Button --}}

        <a href="http://localhost:8000/register" class="text-2xl text-black-light opacity-75 ">



            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-monsterat text-2xl text-black-light opacity-75 hover:underline ml-3">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class=" font-monsterat text-2xl text-black-light opacity-75 hover:underline ml-3 active:cursor-progress hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Sign in</a>
                    @endauth
                </div>
            @endif

        </a>

    </div>
</div>
