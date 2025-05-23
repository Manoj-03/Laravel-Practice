<x-layout>
    <h2>Currently Available Users</h2>

    {{-- @if($greeting == "hello")
        <p>Hi from inside if statement</p>
    @endif --}}

    <ul>
        @foreach($users as $user)
           <li>
                <x-card href="{{ route('users.show', $user->id) }}" :highilight="$user['skill'] > 70">
                    <div>
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->person->name }}</p>
                    </div>
                </x-card>
           </li>
        @endforeach
    </ul>

    <!-- Show pagination links -->
    {{-- {{ $users->links() }} --}}

</x-layout>
