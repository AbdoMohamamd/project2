{{-- <x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-6">Update {{ $passenger->name }} Info</h2>
            <form method="POST" action="/passengers/{{ $passenger->id }}/change">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name:</label>
                    <input type="text" name="first_name" id="first_name"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $passenger->first_name }}" />

                    @error('first_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
                    <input type="text" name="last_name" id="last_name"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $passenger->last_name }}" />

                    @error('last_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $passenger->email }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="passport_expiry_date" class="block text-gray-700 font-bold mb-2">Passport Expiry date:</label>
                    <input type="date" name="passport_expiry_date" id="passport_expiry_date" pattern="\d{4}-\d{2}-\d{2}"
                        placeholder="YYYY-MM-DD"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $passenger->passport_expiry_date }}">
                    @error('passport_expiry_date')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="flight_number" class="block text-gray-700 font-bold mb-2">flight_number:</label>
                    <input type="number" name="flight_number" id="flight_number"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ $passenger->flight_number }}">
                    @error('flight_number')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update passenger
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
</script> --}}
