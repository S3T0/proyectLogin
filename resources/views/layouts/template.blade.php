<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->

    <!-- styles -->
    @stack('css')
    <!-- js -->
    @stack('js')
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <main class="container">
        @yield('content')
    </main>
    <!-- footer -->

    <!-- script -->
</body>
</html>