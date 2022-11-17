<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>M3 Project | {{ $title }}</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-5 pt-5">
        @yield('container')
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>