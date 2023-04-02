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
                  <a href="{{ url('/actualities') }}">
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