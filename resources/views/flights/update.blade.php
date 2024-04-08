<x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-6">Create a new flight</h2>
            <form method="POST" action="/flights/{{$flight->id}}/change">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="number" class="block text-gray-700 font-bold mb-2">number:</label>
                    <input type="number" name="number" id="number"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        value="{{ $flight->number }}">
                    @error('number')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="departure_city" class="block text-gray-700 font-bold mb-2">Departure City:</label>
                    <input type="text" name="departure_city" id="departure_city"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $flight->departure_city }}" />

                    @error('departure_city')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="arrival_city" class="block text-gray-700 font-bold mb-2">Arrival City:</label>
                    <input type="text" name="arrival_city" id="arrival_city"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $flight->arrival_city }}" />

                    @error('arrival_city')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="departure_time" class="block text-gray-700 font-bold mb-2">Departure time:</label>
                    <input type="datetime-local" name="departure_time" id="departure_time" pattern="\d{4}-\d{2}-\d{2}"
                        placeholder="YYYY-MM-DD"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $flight->departure_time }}">
                    @error('departure_time')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="arrival_time" class="block text-gray-700 font-bold mb-2">Arrival time:</label>
                    <input type="datetime-local" name="arrival_time" id="arrival_time" pattern="\d{4}-\d{2}-\d{2}"
                        placeholder="YYYY-MM-DD"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $flight->arrival_time }}">
                    @error('arrival_time')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Flight
                    </button>
                </div>
            </form>
        </div>
    </div>
    @if (session('message'))
        <div class="fixed top-0 bg-red-500 text-white p-4" id="alert">
            {{ session('message') }}
        </div>
    @endif
</x-layout>
<script>
    // Hide the alert after 5 seconds (5000 milliseconds)
    $(document).ready(function() {
        setTimeout(function() {
            $("#alert").fadeOut("slow");
        }, 5000);
    });
</script>
