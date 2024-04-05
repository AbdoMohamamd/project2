<x-layout>

    <div class="container bg-red-500">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @foreach ($users as $user)
                        <div class="card-header" style="text-decoration-color: black">{{ $user->name }}</div>
                        <div class="card-body">

                            <p>Email: {{ $user->email }}</p>
                            <!-- Add more user details as needed -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-layout>
