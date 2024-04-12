{{-- <x-layout>
    <div class="container mx-auto py-8">

        <div class="flex items-center  ">
            <a href="/" class="font-bold text-xl">back</a>
            <h1 class="text-3xl font-semibold text-center mb-6 flex-1">List of Passengers</h1>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-4 border border-gray-200">ID</th>
                        <th class="py-3 px-4 border border-gray-200">First Name</th>
                        <th class="py-3 px-4 border border-gray-200">Last Name</th>
                        <th class="py-3 px-4 border border-gray-200">Email</th>
                        <th class="py-3 px-4 border border-gray-200">Date of Birth</th>
                        <th class="py-3 px-4 border border-gray-200">Passport Expiry Date</th>
                        <th class="py-3 px-4 border border-gray-200">Flight number</th>
                        <th class="py-3 px-4 border border-gray-200">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($passengers as $passenger)
                        <tr>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->id }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->first_name }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->last_name }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->email }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->dob }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->passport_expiry_date }}</td>
                            <td class="py-3 px-4 border border-gray-200">{{ $passenger->number }}</td>
                            <td class="py-3 px-4 border border-gray-200">
                                <button class="bg-red-500 rounded-lg py-2 px-4 text-white"><a
                                        href="/passengers/{{ $passenger->id }}/delete">Delete</a></button>
                                <button class="bg-blue-500 rounded-lg py-2 px-4 text-white"><a
                                        href="/passengers/{{ $passenger->id }}/update">Update</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="bg-green-500 rounded-lg py-2 px-4 text-white mt-4"><a href="/passengers/create">Create a new
           Passenger</a></button>
        <div class="mt-5">{{ $passengers->links() }}</div>
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
