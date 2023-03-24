<div class="nav_menu">
    <img class="logo" src="{{ asset('images/logo_arttech_Transparent_bg.png') }}" alt="logo de Arttech">
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
</div>

{{ $slot }}

<div class="footer">

    <img src="{{ asset('images/logo_arttech_Transparent_bg.png') }}" alt="logo de Arttech">
    <div class="sections">
        <div class="section experience">
            <h3>L'expérience ArtTech</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</p>
            <p>Et netus et malesuada fames ac turpis. Consectetur adipiscing elit ut aliquam purus sit amet luctus.
                In hac habitasse platea dictumst.</p>
        </div>

        <div class="section links">
            <h3>Liens utiles</h3>
            <div><a href="{{ url('/home') }}">Accueil</a></div>
            <div><a href="{{ url('/reservations') }}">Réservations</a></div>
            <div><a href="{{ url('/activities') }}">Activités</a></div>
            <div><a href="{{ url('/news') }}">Actualités</a></div>
            <div><a href="{{ url('/contact') }}">Contact</a></div>
        </div>

        <div class="section adress">
            <h3>Nos Coordonnées</h3>
            <p>
                7812 Richmond Street,<br>
                Quebec, Qc, <br>
                Canada
            </p>
        </div>

        <div class="section join">
            <h3>Nous joindre</h3>
            <p>1-888-ARTTECH</p>
            <a href="mailto:questions@arttechfest.info">questions@arttechfest.info</a>
        </div>
    </div>

    <div class="action">
        <p>Réservez votre forfait personalisé!</p>
        <a class="button" href="{{ url('/reservation') }}">
            Forfaits
        </a>
    </div>

    <div class="socials">
        <h3>Suivez-nous</h3>
        <div class="icons">
            <a href="https://twitter.com/ArtTech_Fest">
                <img src="{{ asset('images/icons/signe-twitter.png') }}" alt="twitter logo" class="icon">
            </a>
            <a href="https://www.facebook.com/profile.php?id=100090321226091">
                <img src="{{ asset('images/icons/facebook_icon.png') }}" alt="facebook logo" class="icon">
            </a>
            <a href="https://www.instagram.com/arttechfest/">
                <img src="{{ asset('images/icons/logo-instagram_square_icon.png') }}" alt="instagram logo"
                    class="icon">
            </a>
            <a href="">
                <img src="{{ asset('images/icons/logo-spotify.png') }}" alt="spotify logo" class="icon">
            </a>
            <a href="">
                <img src="{{ asset('images/icons/logo-linkedin.png') }}" alt="linkedin logo" class="icon">
            </a>
        </div>
    </div>
    <div class="politics">
        <p>Conditions d'utilisation</p>
        <p>Politique de confidentialité</p>
    </div>

    <div class="copyright">Copyright © 2023 <a href="#"> &nbsp; DOOM Squad &nbsp;</a> Tous droits réservés
    </div>

</div>
<script src="{{ asset('js/parts.js') }}"></script>
