<!doctype html>
<html lang="sk">

<head>
    @include('layout.partials.head')
</head>

<body>
    @include('layout.partials.nav')

    <main role="main" class='d-flex flex-column align-items-center'>
        @yield('content')
    </main>

    @include('layout.partials.footer')
</body>

</html>