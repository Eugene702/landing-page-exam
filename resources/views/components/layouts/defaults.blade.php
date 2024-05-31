<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Bima Sakti" }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar />
    {{ $slot }}
</body>

</html>
