<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="flex flex-col items-center" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- First name -->
            <div class="w-full">
                <x-label for="name" :value="__('First name')" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

            {{-- Last name --}}
            <div class="mt-4 w-full">
                <x-label for="name" :value="__('Last name')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4 w-full">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4 w-full">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w-full">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            {{-- Profile picture --}}
            <div class="mt-4 w-full my-2rounded w-full flex flex-col">
                <x-label for="profile_picture" :value="__('Profile Picture')" />
                <x-input id="profile_picture"
                    class="file:cursor-pointer block mt-1 w-full border-2 rounded file:border-0 file:p-2"
                    type="file"
                    name="profile_picture"
                    :value="old('profile_picture')"
                    required/>
            </div>

            <!-- User type -->
            <div class="mt-4 w-full">
                <x-label for="user_type" :value="__('User type')" />
                <select class="rounded mb-4 w-full" name="user_type" id="user_type">
                  <option value="1">Administrator</option>
                  <option value="2" selected>Standard</option>
                  {{-- <option value="3">Customer</option> --}}
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
