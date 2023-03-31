<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ArtTech Fest</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@700&family=Roboto&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset('css/navbar/style.css') }}">
   </head>
   <body>
      <header>
         <img class="logo" src="{{ asset('images/logo_arttech_Transparent_bg.png') }}" alt="arttech logo">
         <a class="toggle-menu" href="#"><i class="fa-solid fa-bars"></i></a>
         <nav id="menu">
            <ul>
               <li>
                  <a href="{{ url('/') }}">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>    
                  Accueil</a>
               </li>
               <li>
                  <a href="{{ url('/reservations') }}">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>    
                  Réservations</a>
               </li>
               <li>
                  <a href="{{ url('/activities') }}">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>    
                  Activités</a>
               </li>
               <li>
                  <a href="{{ url('/actualites') }}">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>    
                  Actualités</a>
               </li>
               <li>
                  <a href="{{ url('/contact') }}">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span> 
                  Contact</a>
               </li>
               <li>
                  <a class='button' href="{{ url('/admin') }}">Connexion</a>
               </li>
            </ul>
         </nav>
      </header>
      <script src="{{ asset('js/togglenav.js') }}"></script>
   </body>
</html>