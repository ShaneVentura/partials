<x-guest-layout>


    <div class="flex items-center justify-center absolute inset-y-0 right-0 mr-16 ">

        <div class="bg-blue-dark rounded-xl shadow-sm mr-14 bg-opacity-20" style="width: full; padding:45px">

            <form method="POST" action="{{ route('register') }}" x-data="{ personalForm: true, addressForm: false, meterForm: false, emailForm: false }">
                @csrf

                <div class="-mt-5">
                    <span class= "text-5xl font-openSans font-normal opacity-80 text-black-light tracking-tight">
                        Create Your
                    </span>


                    <span class= "text-5xl font-openSans font-medium opacity-90 text-black-light tracking-tight">Account
                    </span>


                    <!-- Personal form -->
                    <div x-show="personalForm" style="display: none">
                        <!-- First Name -->
                        <div class="mt-3">
                            <x-input-label for="fname" :value="__('First Name ')" />
                            <x-text-input id="fname" class=" text-xl mt-1 w-full" type="text" name="fname"
                                :value="old('fname')" autofocus autocomplete="given-name" />
                            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                        </div>
                        <!-- Middle Name -->
                        <div class="mt-3">
                            <x-input-label for="mname" :value="__('Middle Name')" />
                            <x-text-input id="mname" class="text-xl mt-1 w-full" type="text" name="mname"
                                :value="old('mname')" autofocus autocomplete="additional-name" />
                            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
                        </div>
                        <!-- Last Name -->
                        <div class="mt-3">
                            <x-input-label for="lname" :value="__('Last Name')" />
                            <x-text-input id="lname" class="text-xl mt-1 w-full" type="text" name="lname"
                                :value="old('lname')" autofocus autocomplete="family-name" />
                            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                        </div>
                        <!-- Phone Number -->
                        <div class="mt-3">
                            <x-input-label for="phone" :value="__('Phone Number')" />
                            <x-text-input id="phone" class=" text-xl mt-1 w-full" type="text" name="phone"
                                :value="old('phone')" autofocus autocomplete="tel" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>


                    <!-- Next button -->
                    <div x-show="personalForm" style="display: none" x-on:click="personalForm=false; meterForm=true"
                        class="mt-3 inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-center text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 cursor-pointer ">
                        {{ __('Next') }}
                    </div>



                    <!-- Meter form -->
                    <div x-show="meterForm" style="display: none">

                        <!-- Meter Number -->
                        <div class="mt-3">
                            <x-input-label for="MID" :value="__('Meter Number')" placeholder />
                            <x-text-input id="MID" class="text-xl mt-1 w-full" type="text" name="MID"
                                :value="old('MID')" autofocus placeholder="8394820349" />
                            @error('MID')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Meter PIN -->
                        <div class="mt-3">
                            <x-input-label for="PIN" :value="__('Meter PIN')" />
                            <x-text-input id="PIN" class="text-xl mt-1 w-full mb-3" type="text" name="PIN"
                                :value="old('PIN')" autofocus />
                            @error('PIN')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>


                    <!-- Buttons -->
                    <div class="flex space-x-3 mt-2 cursor-pointer mb-1">
                        <!-- Back button -->
                        <div x-show="meterForm" style="display: none" x-on:click="personalForm=true; meterForm=false"
                            class=" inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-center text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                            {{ __('Back') }}
                        </div>

                        <!-- Next button -->
                        <div x-show="meterForm" style="display: none" x-on:click="meterForm=false; addressForm=true"
                            class="inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-center text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                            {{ __('Next') }}
                        </div>

                    </div>

                    <!-- Address form -->
                    <div x-show="addressForm" style="display: none">
                        <!-- Province Dropdown -->
                        <div class="mt-3" x-data="{ province: 'oldValue' }">
                            <x-input-label for="phone" :value="__('Province')" />
                            <select id="provinceSelect" name="province" x-model="province"
                                class="w-full border border-blue-border rounded  py-2 mt-2  text-black-light  bg-blue-dark bg-opacity-10">
                                <option value="" disabled selected>Select Province</option>
                            </select>
                            @error('province')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Municipality Dropdown -->
                        <div class="mt-3" x-data="{ municipality: 'oldValue' }">
                            <x-input-label for="municipality" :value="__('Municipality')" />
                            <select id="municipalitySelect" name="municipality" x-model="municipality"
                                class="w-full border border-blue-border rounded  py-2 mt-2  text-black-light  bg-blue-dark bg-opacity-10">
                                <option value="" disabled selected>Select Municipality</option>
                            </select>
                            @error('municipality')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Barangay Dropdown -->
                        <div class="mt-3" x-data="{ barangay: 'oldValue' }">
                            <x-input-label for="phone" :value="__('Barangay')" />
                            <select id="barangaySelect" name="barangay" x-model="barangay"
                                class="w-full border border-blue-border rounded  py-2 mt-2  text-black-light  bg-blue-dark bg-opacity-10 ">
                                <option value="" disabled selected class="text-gray-400">Select Barangay
                                </option>
                            </select>
                            @error('barangay')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex space-x-3 mt-3 cursor-pointer">
                        <!-- Back button -->
                        <div x-show="addressForm" style="display: none"
                            x-on:click="meterForm=true; addressForm=false"
                            class="mb-2 inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-center text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                            {{ __('Back') }}
                        </div>


                        <!-- Next button -->
                        <div x-show="addressForm" style="display: none"
                            x-on:click="addressForm=false; emailForm=true"
                            class="mb-2 inline-flex items-center px-2 py-2 w-full  bg-green-dark border border-transparent rounded-md font-monsterat justify-center text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                            {{ __('Next') }}
                        </div>
                    </div>



                    <!-- Email form -->
                    <div id="emailForm" x-show="emailForm" style="display: none">
                        <!-- Email Address -->
                        <div class="mt-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Username -->
                        <div class="mt-3">
                            <x-input-label for="username" :value="__('Username')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-3">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-3">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                    </div>


                    {{-- Buttons --}}
                    <div class="flex cursor-pointer ">
                        <!-- Back button -->
                        <div x-show="emailForm" style="display: none" x-on:click="addressForm=true; emailForm=false">
                            <button type="button"
                                class="mt-2 inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-start text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                                {{ __('Back') }}
                            </button>
                        </div>

                        <!-- Button Register -->
                        <div x-show="emailForm" style="display: none" onclick="">
                            <button type="submit"
                                class="mt-2 inline-flex items-center px-2 py-2 w-full bg-green-dark border border-transparent rounded-md font-monsterat justify-end text-md text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 ">{{ __('Register') }}</button>

                        </div>

                    </div>


                    <!-- Login -->
                    <a class="underline text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-80"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                </div>

            </form>

        </div>


    </div>


</x-guest-layout>
