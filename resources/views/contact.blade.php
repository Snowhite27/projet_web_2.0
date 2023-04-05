<x-head></x-head>
<title>ArtTech Fest || Contact</title>
<body>
    <div class="main">
        <div class="main_contact">
            <div class="background_image_container"></div>

            <div class="contact_container">
                <div class="information">
                    <h1>Nous Contacter</h1>
                    <p>Chez ARTTECH, nous sommes passionnés par la livraison d’expériences immersives inoubliables
                        qui engagent et inspirent le public.</p>
                    <p>Que vous souhaitiez en savoir plus sur la VR immersive, les projections vidéo, les spectacles
                        audiovisuels ou les spectacles de lumière immersive par drone, notre équipe se consacre à
                        vous fournir les informations et le soutien dont vous avez besoin pour faire de votre
                        prochain événement un succès.</p>
                    <p>N’hésitez pas à nous contacter pour toute question, commentaire ou demande de renseignements.
                        Nous sommes toujours là pour vous aider !</p>
                </div>
                <div class="divider"></div>
                <form action="" class="message">
                    <p>Nom</p>
                    <input type="text">
                    <p>Courriel</p>
                    <input type="text">
                    <p>Message</p>
                    <textarea name="" id=""></textarea>
                    <input class="message_button" type="submit" value="Envoyer">
                </form>
                <div class="divider"></div>
                <div class="contact">
                    <div class="numero_container">
                        <img class="numero_image"
                            src="{{ asset('images/contact/telephone-handle-silhouette_1.png') }}" alt="">
                        <p class="numero">1-800-278-8324</p>
                    </div>
                    <div class="email_container">
                        <img class="email_image" src="{{ asset('images/contact/arroba_1.png') }}" alt="">
                        <p>questions@arttechfest.com</p>
                    </div>
                    <div class="location_container">
                        <img class="location_image" src="{{ asset('images/contact/emplacement_1.png') }}"
                            alt="">
                        <p>118 Rue de la gare, Saint-Jérôme, QC J7Z 0J1</p>
                    </div>
                    <div class="divider"></div>
                    <div class="social">
                        <img class="location_image" src="{{ asset('images/contact/twitter.png') }}" alt="">
                        <img class="location_image" src="{{ asset('images/contact/facebook.png') }}" alt="">
                        <img class="location_image" src="{{ asset('images/contact/instagram.png') }}"
                            alt="">
                        <img class="location_image" src="{{ asset('images/contact/linkedin.png') }}" alt="">
                        <img class="location_image" src="{{ asset('images/contact/logo-spotify.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="map_container">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.756094936426!2d-74.003559684133!3d45.77607812059902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca6c7628d2f%3A0x47161ed0d050ef75!2s118%20Rue%20de%20la%20Gare%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%202B9!5e0!3m2!1sen!2sca!4v1678818143659!5m2!1sen!2sca"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
<x-footer></x-footer>
