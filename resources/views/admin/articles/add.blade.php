<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <form class="flex justify-start items-center w-full flex-col" action="{{ route('admin.articles.add.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="w-full">
                            <x-label for="name" :value="__('Title')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                        </div>

                        {{-- Description --}}
                        <div class="mt-4 w-full">
                            <x-label for="name" :value="__('Description')" />
                            <textarea name="description" rows="10" class="block mt-1 w-full rounded" required></textarea>
                        </div>

                        {{-- Image --}}
                        <div class="mt-4 w-full my-2rounded w-full flex flex-col mb-5">
                            <x-label for="picture" :value="__('Image')" />
                            <x-input id="picture" class="file:cursor-pointer block mt-1 w-full border-2 rounded file:border-0 file:p-2" type="file" name="picture" :value="old('profile_picture')"/>
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
    </div>
</x-app-layout>
