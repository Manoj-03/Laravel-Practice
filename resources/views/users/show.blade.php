<x-layout>
    <h2>{{ $user->name }}</h2>
    <p><strong>Skill Level: </strong> {{ $user->skill }}</p>
    <p><strong>About Me: </strong> {{ $user->bio }}</p>

    <h3>Person Information</h3>
    <p><strong>Person Name: </strong>{{ $user->person->name }}</p>
    <p><strong>Location: </strong>{{ $user->person->location }}</p>
    <p><strong>About the Person: </strong></p>
    <p>{{ $user->person->description }}</p>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf

        @method('DELETE')

        <button type="submit">Delete User</button>
    </form>
</x-layout>
