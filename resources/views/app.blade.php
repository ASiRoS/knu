<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
            </div>
        </div>
    </nav>

    @include('partitions.success')

    <div class="container ">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>


    <!-- Footer -->
    <footer class="page-footer font-small bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">&copy; Бекназаров Азиз</div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <style>
        .page-footer {
            color: #fff;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>