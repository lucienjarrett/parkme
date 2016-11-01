@include('layouts._header')
<body>
    <div id="app">
        
        @include('layouts._nav')

<div class="container">
    <div class="row">

        @yield('content')
    </div>
    </div>
</div>

    <!-- Scripts --
    <script src="/js/app.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>

@include('layouts._footer')
</html>
