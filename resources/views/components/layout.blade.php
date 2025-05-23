<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Practice</title>
</head>
<body>

    @if(session('success'))
        {{ session('success') }}
    @endif
    <header>
        <nav>
            <h1>Users</h1>
            <a href="{{ route('users.index') }}">All Users</a>
            <a href="{{ route('users.create') }}">Create New User</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>
