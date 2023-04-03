<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="border border-[#181a1b] hover:border-[#f9b96f] bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg w-[25%]">
                <a class="p-6 flex flex-col justify-center items-center" href="{{ route('admin.packages.add') }}">Ajouter un forfait</a>
            </div>
        </div>
    </div>

    @foreach ($packages as $package)
        <div class="pt-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg flex flex-row justify-between lg:px-8 h-fit">
                    <div class="flex flex-row max-w-[75%]">
                        <div class="aspect-square h-full flex flex-col items-start justify-center items-center">
                            <img class="object-cover h-48 p-4 aspect-square" src="{{ asset('images/packages/' . $package->picture) }}" alt="">
                        </div>
                        <div class="p-6 flex flex-col justify-evenly items-start w-[75%]">
                            <p class="font-extrabold">{{ $package->name }}</p>
                            <pre class="font-extralight w-full truncate ...">{{ $package->description }}...</pre>
                            <br>
                            <p>Inclusions:</p>
                            @foreach (explode("\r\n", $package->includes) as $line)
                                <li>{{ ucfirst($line) }}</li>
                            @endforeach
                            <br>
                            <p>Prix: {{ $package->price }}$</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-evenly items-center w-[50px]">
                        <a class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" href="{{ route('admin.packages.edit', $package->id) }}">
                            <img class="w-8" src="{{ asset('icons/edit.png')}}" alt="">
                        </a>
                        <form class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" action="{{ route('admin.packages.remove', $package->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <img class="absolute w-8" src="{{ asset('icons/remove.png')}}" alt="">
                            <input class="absolute w-12 cursor-pointer aspect-square" type="submit" value="" class="cursor-pointer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
