<html>

<head>
    <title>Travel | Softsaro </title>
    @include('frontend.links.style')
    @include('frontend.links.script')

</head>

<body>

    <div>
        @include('frontend.layout.topnavbar')
        @include('frontend.layout.navbar')
        @yield('main')
        @include('frontend.layout.footer')

    </div>




</body>

</html>
