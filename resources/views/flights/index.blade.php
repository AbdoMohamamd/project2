<x-layout>
    <div class="container mx-auto py-8">

        <div class="flex items-center  ">
            <a href="/" class="font-bold text-xl">back</a>
            <h1 class="text-3xl font-semibold text-center mb-6 flex-1">List of Flights</h1>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-4 border border-gray-200">ID</th>
                        <th class="py-3 px-4 border border-gray-200">Number</th>
                        <th class="py-3 px-4 border border-gray-200"> Departure City</th>
                        <th class="py-3 px-4 border border-gray-200">Arrival city</th>
                        <th class="py-3 px-4 border border-gray-200">Departure Time</th>
                        <th class="py-3 px-4 border border-gray-200">Arrival time</th>
                        <th class="py-3 px-4 border border-gray-200">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($flights as $flight)
                        <tr>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->id }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->number }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->departure_city }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->arrival_city }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->departure_time }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $flight->arrival_time }}</td>
                            <td class="py-3 px-4 border border-gray-200">
                                <button class="bg-red-500 rounded-lg py-2 px-4 text-white"><a
                                        href="/flights/{{ $flight->id }}/delete">Delete</a></button>
                                <button class="bg-blue-500 rounded-lg py-2 px-4 text-white"><a
                                        href="/flights/{{ $flight->id }}/update">Update</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="bg-green-500 rounded-lg py-2 px-4 text-white mt-4"><a href="/flights/create">Create a new
           flight</a></button>
        <div class="mt-5">{{ $flights->links() }}</div>
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
