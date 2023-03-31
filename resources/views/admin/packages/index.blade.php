<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <a href="{{ route('admin.packages.add') }}">Ajouter un forfait</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($packages as $package)
        <div class="pt-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $package->name }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <a href="{{ route('admin.packages.edit', $package->id) }}">Modifier</a>
                    </div>
                    <form class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center" action="{{ route('admin.packages.remove', $package->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Remove" class="cursor-pointer">
                    </form>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $package->price }}$</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <img class="mb-3 object-contain max-w-[50%] px-6" src="{{ asset('images/packages/' . $package->picture) }}" alt="">
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <pre>{{ $package->description }}</pre>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <pre>{{ $package->includes }}</pre>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
