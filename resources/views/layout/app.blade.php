@include('header')

<body class="bg-navy">
    <div class="col-md-offset-4">
        <nav class="navbar navbar-brand">
            <div class="container">
                    <a class="navbar-brand bg-info text-bold" href="{{ url('/') }}">{{ config('app.name', 'SDTS') }} </a>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>