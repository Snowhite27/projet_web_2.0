<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <a href="{{ route('admin.articles.add') }}">Ajouter une actualité</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($articles as $article)
        <div class="pt-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $article->name }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <a href="{{ route('admin.articles.edit', $article->id ) }}">Modifier</a>
                    </div>
                    <form class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center" action="{{ route('admin.articles.remove', $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Remove" class="cursor-pointer">
                    </form>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $article->updated_at }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <img class="mb-3 object-contain max-w-[50%] px-6" src="{{ asset('images/articles/' . ($article->picture)) }}" alt="">
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $article->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
