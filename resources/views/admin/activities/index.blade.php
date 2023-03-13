<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <a href="{{ route('admin.activities.add') }}">Ajouter une activité</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($activities as $activity)
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>{{ $activity->name }}</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <a href="{{ route('admin.activities.edit', $activity->id ) }}">Modifier</a>
                </div>
                <form class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center" action="{{ route('admin.activities.remove', $activity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Remove" class="">
                </form>
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <img class="mb-3 object-contain max-w-[50%] px-6" src="{{ asset('images/activities/' . ($activity->picture)) }}" alt="">
                </div>
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    <p>{{ $activity->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
