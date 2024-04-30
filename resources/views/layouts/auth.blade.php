<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->

    <!-- styles -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- js -->
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container{
            width: 400px;
        }

    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <main class="form-container">
        @yield('content')
    </main>
    <!-- footer -->

    <!-- script -->
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>