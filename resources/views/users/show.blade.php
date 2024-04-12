{{-- <x-layout>
    <div class="container mx-auto">
        <div class="flex items-center  ">
            <a href="/" class="font-bold text-xl">back</a>
            <h1 class="text-3xl font-semibold text-center mb-6 flex-1">List of Users</h1>
        </div>
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4 border border-gray-200">ID</th>
                    <th class="py-3 px-4 border border-gray-200">Name</th>
                    <th class="py-3 px-4 border border-gray-200">Email</th>
                    <th class="py-3 px-4 border border-gray-200">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-3 px-4 border border-gray-200">{{ $user->id }}</td>
                        <td class="py-3 px-4 border border-gray-200">{{ $user->name }}</td>
                        <td class="py-3 px-4 border border-gray-200">{{ $user->email }}</td>
                        <td class="py-3 px-4 border border-gray-200">
                            <button class="bg-red-500 rounded-lg py-2 px-4 text-white"><a
                                    href="/users/{{ $user->id }}/delete">Delete</a></button>
                            <button class="bg-blue-500 rounded-lg py-2 px-4 text-white"><a
                                    href="/users/{{ $user->id }}/update">Update</a></button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="bg-green-500 rounded-lg py-2 px-4 text-white mt-4"><a href="/users/create">Create a new
                user</a></button>

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
