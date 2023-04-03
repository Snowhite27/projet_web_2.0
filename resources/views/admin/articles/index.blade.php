<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="border border-[#181a1b] hover:border-[#f9b96f] bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg w-[25%]">
                <a class="p-6 flex flex-col justify-center items-center" href="{{ route('admin.articles.add') }}">Ajouter une actualité</a>
            </div>
        </div>
    </div>

    @foreach ($articles as $article)
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#181a1b] text-[#e5f0ff] overflow-hidden shadow-sm sm:rounded-lg flex flex-row justify-between lg:px-8 h-fit">
                <div class="flex flex-row max-w-[75%]">
                    <div class="aspect-square h-full flex flex-col items-start justify-center items-center">
                        <img class="object-cover h-48 p-4 aspect-square" src="{{ asset('images/articles/' . ($article->picture)) }}" alt="">
                    </div>
                    <div class="p-6 flex flex-col justify-evenly items-start">
                        <p class="font-extrabold">{{ $article->name }}</p>
                        <p class="font-extralight">{{ $article->description }}</p>
                        <br>
                        <p>Création: {{ $article->created_at }}</p>
                    </div>
                </div>
                <div class="flex flex-col justify-evenly items-center w-[50px]">
                    <a class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" href="{{ route('admin.articles.edit', $article->id ) }}">
                        <img class="w-8" src="{{ asset('icons/edit.png')}}" alt="">
                    </a>
                    <form class="hover:border hover:border-[#f9b96f] bg-[#1e2022] w-full aspect-square rounded-lg flex justify-center items-center" action="{{ route('admin.articles.remove', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <img class="absolute w-8" src="{{ asset('icons/remove.png')}}" alt="">
                        <input class="absolute w-12 cursor-pointer aspect-square" type="submit" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
