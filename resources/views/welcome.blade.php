
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
                <h5>
                    {{ $train->company }}: From {{ $train->departure_station }} to {{ $train->arrival_station }}
                </h5>
                <p>
                    {{ $train->departure_time }} -> {{ $train->arrival_time }} <br>
                    {{ $train->train_code }}, carriages: {{ $train->no_carriages }}, <br>
                    {{ ($train->on_time) ? 'on time' : 'delayed' }}, <br>
                    {{ ($train->cancelled) ? 'CANCELLED' : '' }} <br><br>
                </p>
            </li>

            @empty
            <p>There are no available trains...</p>

            @endforelse

        </ul>
    </main>
</body>
</html>