<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tools Network</title>
    @vite('resources/css/app.css')

</head>

<body class="text-center px-8 py-12">
    <h1>Welocome to my Network</h1>
    <p>click button below to view the list</p>

    <a href="/tools" class="btn mt-4 inline-block">
        Find Tools
    </a>
</body>

</html>
