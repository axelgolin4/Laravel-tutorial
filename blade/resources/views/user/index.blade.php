<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
        <h1>Users:</h1>
        <br>

            <ul>
                @forelse ($users as $user)
                    <li>{{ $user->name }}</li>
                @empty
                    <li>No hay usuarios registrados.</li>
                @endforelse
            </ul>
</body>
</html>