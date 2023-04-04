   <x-head></x-head>
   <title>ArtTech Fest || Accueil</title>
   <button class="scroll-top"> <i class="fa-solid fa-chevron-up"></i></button>
   <body>
      @yield('content')

      <x-footer></x-footer>
      <script src="{{ asset('js/scroll-top.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('js/toggle_nav.js') }}"></script>
   </body>
</html>
