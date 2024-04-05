<x-layout>
    <div class="container mx-auto">

        <table class="border-collapse border border-black w-full">
            @foreach ($users as $user)
                <tr class="border border-black">
                    <td class="border border-black px-4 py-2">{{ $user->name }}</td>
                    <td class="border border-black px-4 py-2">{{ $user->email }}</td>
                    <td class="border border-black px-4 py-2">
                        <button class="bg-red-500 rounded-lg py-2 px-4 text-white"><a
                                href="/users/{{ $user->id }}/destroy">Delete</a></button>
                        <button class="bg-blue-500 rounded-lg py-2 px-4 text-white"><a
                                href="/users/{{$user->id}}/update">Update</a></button>

                    </td>
                </tr>
               
            @endforeach
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
</script>
