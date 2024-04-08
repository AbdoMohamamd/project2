<x-layout>

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-center mb-6">Welcome to Our Airline Management System</h1>
        <div class="flex justify-center">
            <a href="{{ '/passengers/show' }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">View Passengers</a>
            <a href="{{ '/flights/show' }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">View Flights</a>
            <a href="{{ 'users/show' }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">View Users</a>
        </div>
    </div>
</x-layout>
