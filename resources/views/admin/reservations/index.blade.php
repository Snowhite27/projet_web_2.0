<x-app-layout>

    @foreach ($reservations as $reservation)
        <div class="pt-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $reservation->created_at }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $reservation->id }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $reservation->package->name }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $reservation->user->first_name . ' ' . $reservation->user->last_name }}</p>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                        <p>{{ $reservation->event_date }}</p>
                    </div>
                    <form class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center"
                        action="{{ route('admin.reservations.remove', $reservation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Remove" class="">
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
