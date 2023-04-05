<x-head></x-head>
<title>ArtTech Fest || Actualités</title>
<button class="scroll-top"> <i class="fa-solid fa-chevron-up"></i></button>
<body>
    @yield('content')

    <script src="{{ asset('js/modal-news.js') }}"></script>
    <script src="{{ asset('js/carousel-news.js') }}"></script>
    <script src="{{ asset('js/scroll-top.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/toggle_nav.js') }}"></script>
</body>
<x-footer></x-footer>
