<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="border border-[#181a1b] hover:border-[#f9b96f] bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg w-[25%]">
                <a class="p-6 flex flex-col justify-center items-center" href="{{ route('admin.activities.add') }}">Ajouter une activité</a>
            </div>
        </div>
    </div>

    @foreach ($activities as $activity)
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg flex flex-row justify-between lg:px-8 h-fit">
                <div class="flex flex-row max-w-[75%]">
                    <div class="aspect-square h-full flex flex-col items-start justify-center items-center">
                        <img class="object-cover h-48 p-4 aspect-square" src="{{ asset('images/activities/' . ($activity->picture)) }}" alt="">
                    </div>
                    <div class="p-6 flex flex-col justify-evenly items-start">
                        <p class="font-extrabold">{{ $activity->name }}</p>
                        <p class="font-extralight">{{ $activity->description }}</p>
                    </div>
                </div>
                <div class="flex flex-col justify-evenly items-center w-[50px]">
                    <a class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" href="{{ route('admin.activities.edit', $activity->id ) }}">
                        <img class="w-8" src="{{ asset('icons/edit.png')}}" alt="">
                    </a>
                    <form class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" action="{{ route('admin.activities.remove', $activity->id) }}" method="POST">
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
