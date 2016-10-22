@include('layouts._header')
<body>
    <div id="app">
        
        @include('layouts._nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>

@include('layouts._footer')
</html>
