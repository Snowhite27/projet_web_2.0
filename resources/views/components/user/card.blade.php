
<div class="bg-white shadow flex justify-center rounded-xl">
    <div class="p-6 bg-white border-b border-gray-200 flex justify-center flex-col rounded-xl">
        <img class="mb-3 object-contain max-w-xs px-6" src="{{ asset('images/user_profile/' . ($user->profile_picture)) }}" alt="">
        <form class="flex justify-start items-center w-full flex-col" action="{{ route('user.modify', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- First name -->
            <div class="w-full">
                <x-label for="name" :value="__('First name')" />
                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $user->first_name }}" required autofocus />
            </div>

            {{-- Last name --}}
            <div class="mt-4 w-full">
                <x-label for="name" :value="__('Last name')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $user->last_name }}" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4 w-full">
                <x-label for="email" :value="__('Email')"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}"/>
            </div>

            <!-- Password -->
            <div class="mt-4 w-full">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w-full">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
            </div>

            {{-- Profile picture --}}
            <div class="mt-4 w-full my-2rounded w-full flex flex-col mb-5">
                <x-label for="profile_picture" :value="__('Profile Picture')" />
                <x-input id="profile_picture" class="file:cursor-pointer block mt-1 w-full border-2 rounded file:border-0 file:p-2" type="file" name="image" :value="old('profile_picture')"/>
            </div>

            <!-- User type -->
            <div class="mt-4 w-full">
                <x-label for="user_type" :value="__('User type')" />
                <select class="rounded mb-4 w-full" name="user_type" id="user_type">
                    <option value="1">Administrator</option>
                    <option value="2">Standard</option>
                </select>
            </div>

            {{-- Submit --}}
            <div class="flex flex-row justify-evenly w-full">
                <a class="text-white bg-gray-800 rounded px-5 h-10 text-center cursor-pointer my-2 flex items-center" href="{{ route('dashboard') }}">Cancel</a>
                <input type="submit" value="Apply" class="text-white bg-blue-500 rounded px-5 h-10 text-center cursor-pointer my-2">
            </div>
        </form>
    </div>
</div>
