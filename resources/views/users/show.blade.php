<x-layout>

    <div class="container ">

        <table class="border-2 border-black">
            @foreach ($users as $user)
                <tr class="border-2 border-black ">
                    <td class="border-2 border-black p-3">{{ $user->name }}</td>
                    <td class="border-2 border-black p-3">{{ $user->email }}</td>
                    <td class="border-2 border-black p-3"><button class="bg-red-500 rounded-lg p-3 text-white"><a
                                href="/users/{{ $user->id }}/destroy">Delete</a></button></td>

                </tr>
            @endforeach
        </table>

    </div>
    @if (session('message'))
        <div class="fixed top-0 bg-red" id="alert">
            {{ session('message') }}
        </div>
    @endif
</x-layout>

<script>
    // Hide the alert after 5 seconds (5000 milliseconds)
    $(document).ready(function(){
        setTimeout(function(){
            $("#alert").fadeOut("slow");
        }, 5000);
    });
</script>
