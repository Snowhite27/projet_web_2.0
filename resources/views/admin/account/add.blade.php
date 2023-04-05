<x-app-layout>
    <div class="py-6 flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-[#181a1b] flex justify-center flex-col rounded-xl">
                <form class="flex justify-start items-center w-full flex-col" action="{{ route('user.add.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- First name -->
                    <div class="w-full">
                        <x-label class="text-white" for="name" :value="__('First name')" />
                        <x-input id="first_name" class="bg-[#464849] text-white border-none block mt-1 w-full" type="text" name="first_name" value="" required />
                    </div>

                    {{-- Last name --}}
                    <div class="mt-4 w-full">
                        <x-label class="text-white" for="name" :value="__('Last name')" />
                        <x-input id="last_name" class="bg-[#464849] text-white border-none block mt-1 w-full" type="text" name="last_name" value="" required />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 w-full">
                        <x-label class="text-white" for="email" :value="__('Email')"/>
                        <x-input id="email" class="bg-[#464849] text-white border-none block mt-1 w-full" type="email" name="email" value=""/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4 w-full">
                        <x-label class="text-white" for="password" :value="__('Password')" />
                        <x-input id="password" class="bg-[#464849] text-white border-none block mt-1 w-full" type="password" name="password" autocomplete="new-password"/>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 w-full">
                        <x-label class="text-white" for="password_confirmation" :value="__('Confirm Password')"/>
                        <x-input id="password_confirmation" class="bg-[#464849] text-white border-none block mt-1 w-full" type="password" name="password_confirmation" />
                    </div>

                    {{-- Profile picture --}}
                    <div class="mt-4 w-full my-2rounded w-full flex flex-col mb-5">
                        <x-label class="text-white" for="profile_picture" :value="__('Profile Picture')" />
                        <x-input id="profile_picture" class="file:cursor-pointer block mt-1 w-full border-2 rounded file:border-0 file:p-2 text-white" type="file" name="image" :value="old('profile_picture')"/>
                    </div>

                    {{-- Submit --}}
                    <div class="flex flex-row justify-evenly w-full">
                        <a class="text-white bg-gray-800 rounded px-5 h-10 text-center cursor-pointer my-2 flex items-center" href="{{ route('admin') }}">Cancel</a>
                        <input type="submit" value="Apply" class="text-white bg-blue-500 rounded px-5 h-10 text-center cursor-pointer my-2">
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
