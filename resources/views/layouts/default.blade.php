<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
    <title>Document</title>
</head>

<body>
    <header>@include('partials.header')</header>
    <main>@yield('content')</main>
    <footer>@include('partials.footer')</footer>
</body>

</html>
