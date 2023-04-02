<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="https://use.typekit.net/vko1nol.css%22%3E">
      <link rel="stylesheet" href="{{ asset('css/index/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/navbar/navbar.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <head>
   <link rel="shortcut icon" href="{{ asset('/images/arttech_imgs/favicon/favicon_32x32.png') }}">
</head>
<button class="scroll-top"> <i class="fa-solid fa-chevron-up"></i></button>
<body>


 @yield('content')

   <script src="{{ asset('js/scroll-top.js') }}"></script>
   <script src="{{ asset('js/custom.js') }}"></script>
   <script src="{{ asset('js/toggle_nav.js') }}"></script>
</body>
</html>
