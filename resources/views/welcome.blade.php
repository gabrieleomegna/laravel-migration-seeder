
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome blade</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>
    <main>
        <ul>
            @forelse($trains as $train)
            <li>
                {{$train->company}}
            </li>

            @empty
            <p>There are no available trains...</p>

            @endforelse

        </ul>
    </main>
</body>
</html>