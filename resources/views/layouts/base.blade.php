<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BOOLPRESS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <h1 class="text-uppercase display-4 text-center font-weight-bold">boolpress</h1>
        <nav class="d-flex justify-content-around border border-dark border-right-0 border-left-0 p-2">
            <a href="#" class="btn btn-outline-danger">Home</a>
            <a href="#" class="btn">Home</a>
            <a href="#" class="btn">Home</a>
        </nav>
    </header>
    <main class="p-4">
        @yield('main')
    </main>
    <footer class="bg-dark text-light p-4 text-center">
        <span>&COPY;BOOLPRESS 2021</span>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
