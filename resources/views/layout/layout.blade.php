<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Journey')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="full-page-content">
    @include('layout.header')
    <main>
        @yield('content')
    </main>
    @include('layout.footer')
</body>
</html>