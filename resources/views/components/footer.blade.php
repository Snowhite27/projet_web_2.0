<link rel="stylesheet" href="{{ asset('css/footer/footer.css') }}">
<div>
    <div class="footer">
        <img src="{{ asset('images/logo_arttech_Transparent_bg.png') }}" alt="">
        <div class="sections">
            <div class="section experience">
                <h3>L'expérience ArtTech</h3>
                <p>Le festival ArtTech vous transporte dans un monde virtuel incroyable. Vous découvrirai des technologies immersives telles que la réalité virtuelle, la réalité augmentée, la projection 3D et bien plus encore. Lors du festival, vous serez en mesure de découvrir les dernières avancées en matière de technologie, de rencontrer des experts.</p><br>
                <p>Participer au festival ArtTech est une expérience inoubliable et fascinante qui vous permettra de découvrir les technologies les plus innovantes du moment.</p>
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
                    34 Avenue Ramsgate,<br>
                    North York, Qc, <br>
                    Canada
                </p><br>
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

        <div class="packages">
            <p>Réservez votre forfait personalisé!</p>
            <a class="button2" href="{{ url('/reservation') }}">
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
                    <img src="{{ asset('images/icons/logo-instagram_square_icon.png') }}" alt="instagram logo" class="icon">
                </a>
                <a href="">
                    <img src="{{ asset('images/icons/logo-spotify.png') }}" alt="spotify logo" class="icon">
                </a>
                <a href="">
                    <img src="{{ asset('images/icons/logo-linkedin.png') }}" alt="linkedin logoS" class="icon">
                </a>
            </div>
        </div>
        <span>Conditions d'utilisation</span>
        <span>Politique de confidentialité</span>
        <div class="copyright">Copyright © 2023 <a href="#"> &nbsp; DOOM Squad &nbsp;</a> Tous droits réservés</div>
    </div>
</div>
