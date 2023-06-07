<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DV - {{$title}}</title>
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">

    <x-layouts.navigation />

    @if (session("status"))
       <div>{{ session("status") }}</div>
    @endif

    {{ $slot }}

</body>
</html>
