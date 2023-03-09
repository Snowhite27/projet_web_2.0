<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Auth()->user()->user_type == 1)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>Gestion des utilisateurs</p>
                    @foreach ($user_list as $single_user)
                        <a href="{{ route('account', $single_user->id) }}">{{ $single_user->first_name }} {{ $single_user->last_name }} ({{ $single_user->name }})</a>
                    @endforeach
                </div>
            </div>
            @endif
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>Gestion des forfaits</p>
                </div>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>Gestion des activités</p>
                </div>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>Gestion des actualités</p>
                    {{-- @dd($articles)
                    @foreach ($articles as $article)
                        <p>{{ $article->name }}</p>
                    @endforeach --}}
                </div>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>Gestion des réservations</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
