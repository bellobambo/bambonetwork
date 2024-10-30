<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools Network</title>
</head>

<body>
    <h2>Currently Available Tools</h2>

    @if ($greeting == 'Hello')
        <p>Hi from inside the if statement</p>
    @endif


</body>
<ul>
    @foreach ($ninjas as $ninja)
        <li>
            <p>
                {{ $ninja['name'] }}

            </p>
            <a href="/tools/{{ $ninja['id'] }}">
                View Details
            </a>
        </li>
    @endforeach
</ul>

</html>
