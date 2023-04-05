<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-[#181a1b] flex flex-col justify-center items-center">
                    <form class="flex justify-start items-center w-full flex-col" action="{{ route('admin.articles.edit.submit', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title -->
                        <div class="w-full">
                            <x-label class="text-white" for="name" :value="__('Title')" />
                            <x-input id="name" class="bg-[#464849] text-white border-none block mt-1 w-full" type="text" name="name" value="{{ $article->name }}" required />
                        </div>

                        {{-- Description --}}
                        <div class="mt-4 w-full">
                            <x-label class="text-white" for="name" :value="__('Description')" />
                            <textarea name="description" rows="10" class="bg-[#464849] text-white border-none block mt-1 w-full rounded" required>{{ $article->description }}</textarea>
                        </div>

                        {{-- Image --}}
                        <div class="mt-4 w-full my-2rounded w-full flex flex-col mb-5">
                            <x-label class="text-white" for="picture" :value="__('Image')" />
                            <x-input id="picture" class="bg-[#464849] text-white border-none file:cursor-pointer block mt-1 w-full border-2 rounded file:border-0 file:p-2" type="file" name="picture" :value="old('profile_picture')"/>
                        </div>

                        {{-- Submit --}}
                        <div class="flex flex-row justify-evenly w-full">
                            <a class="text-white bg-gray-800 rounded px-5 h-10 text-center cursor-pointer my-2 flex items-center" href="{{ route('admin.articles') }}">Cancel</a>
                            <input type="submit" value="Apply" class="text-white bg-blue-500 rounded px-5 h-10 text-center cursor-pointer my-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
