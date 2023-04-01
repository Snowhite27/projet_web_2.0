<x-app-layout>
    <form action="">
        @csrf
        <!-- Mois -->
        <div class="mt-4 w-full">
            <x-label for="month" :value="__('Mois')" />
            <select class="rounded mb-4 w-full" name="month" id="month">
                <option value="1">janvier</option>
                <option value="2">février</option>
                <option value="3">mars</option>
                <option value="4">avril</option>
                <option value="5">mai</option>
                <option value="6">juin</option>
                <option value="7">juillet</option>
                <option value="8">août</option>
                <option value="9">septembre</option>
                <option value="10">octobre</option>
                <option value="11">novembre</option>
                <option value="12">décembre</option>
            </select>
        </div>

        {{-- Submit --}}
        <div class="flex flex-row justify-evenly w-full">
            <a class="text-white bg-gray-800 rounded px-5 h-10 text-center cursor-pointer my-2 flex items-center"
                href="{{ route('admin.reservations') }}">Cancel</a>
            <input type="submit" value="Apply"
                class="text-white bg-blue-500 rounded px-5 h-10 text-center cursor-pointer my-2">
        </div>
    </form>

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
