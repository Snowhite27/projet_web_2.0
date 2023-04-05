@extends('layouts.homepage')

@section('content')
    <section class="hero-section">
        <video autoplay loop muted>
            <source src="/video/arttech_intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <h1>Explorez l'inconnu avec Arttech</h1>
            <p>*Nombre limité de billets</p>
         <a class="button1" id="button-one" href="{{ url('/reservations') }}">Réservez maintenant </a>
        </div>
    </section>
    <section class="story-section" id="section1">
        <div class="rectangle-gradient" id="rectangle-gradient"></div>
        <div class="half-circle-gradient-box" id="circle-gradient">
            <img class="half-circle" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png" alt="half circle shape">
        </div>
        <div class="img-story-container" >
            <img class="arttech-expo" id="story-img" src="/images/arttech_imgs/homepage_imgs/section_histoire/arttech_histoire.webp"
                alt="man wearing a vr headset in an expo">
        </div>
        <div class="story-content">
            <h2 id="title">Quand la technologie <span style="color: #F9B96F;">rencontre l'art</span></h2>
            <p id="content">Découvrez comment Arttech Fest a su allier art et technologie pour créer une expérience immersive unique en son genre. Depuis sa création, Arttech Fest a su attirer un public curieux et passionné, grâce à ses activités innovantes telles que la réalité virtuelle immersive, les performances audiovisuelles en temps réel, les projections vidéo immersives et bien plus encore. Plongez dans l'univers alternatif du festival et découvrez la créativité sans limite qui s'y déploie. </p>
        </div>
        <div class="deco-dots-container">
            <img class="circle-dots" src="/images/arttech_imgs/custom_shapes/colored_dots.png"
                alt="decorative colorful dots aligned on top of each other">
        </div>
    </section>
    <section class="activities-section" id="section2">
        <div class="gallery-container">
            <div class="activity_one">
                <img id="activity-one" src="/images/arttech_imgs/homepage_imgs/section_activites/activite_audio_visuel.png"
                    alt="immersive audio visual">
            </div>
            <div class="activity_two">
                <img id="activity-two" src="/images/arttech_imgs/homepage_imgs/section_activites/activite_xtra.png"
                    alt="immersive vr lightshow">
            </div>
            <div class="activity_three">
                <img id="activity-three" src="/images/arttech_imgs/homepage_imgs/section_activites/activite_drone.png"
                    alt="immersive drone show">
            </div>
            <div class="activity_four">
                <img id="activity-four" src="/images/arttech_imgs/homepage_imgs/section_activites/activite_vr.png"
                    alt="immersive vr experimented by a couple">
            </div>
            <div class="activity_five">
                <img id="activity-five" src="/images/arttech_imgs/homepage_imgs/section_activites/activite_projection.png"
                    alt="immersive light projection on walls">
            </div>
        </div>
        <div class="activities-content">
            <h2 id="title">Vivez des aventures virtuelles  <span style="color: #F9B96F;">inoubliables</span></h2>
            <p id="content">Plongez dans des mondes incroyables, explorez des lieux imaginaires et rencontrez des personnages fascinants grâce à notre expérience de réalité virtuelle immersive. Avec notre équipement de pointe, vous pouvez vivre une expérience inoubliable qui vous transportera dans des mondes que vous n'auriez jamais imaginés. </p>
                <a class="button1" id="button-one" href="{{ url('/activities') }}">Consulter les activités</a>
        </div>
    </section>
    <section class="news-section" id="section3">
        <div class="news-content">
            <h2 id="title">Actualités <span style="color: #F9B96F;">tech immersives</span></h2>
            <p id="content">Les avancées technologiques récentes ont transformé l'expérience immersive, offrant de nouvelles perspectives pour la narration, la conception de jeux, la formation professionnelle et bien plus encore. </p>
            <br>
            <p id="content-two">Restez à jour avec les dernières actualités sur la technologie immersive à travers le monde. Cliquez pour en savoir plus.</p>
                <a class="button2" id="button-two" href="{{ url('/actualities') }}">En savoir plus</a>
        </div>
        <div class="news-image-container">
            <img id="news-img" src="/images/arttech_imgs/homepage_imgs/section_actualite/cercle_actualite_img.png"
                alt="world map immersive wall projection">
        </div>
        <div class="half-circle-gradient-box-left">
            <img class="half-circle-left" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png"
                alt="half circle shape">
        </div>
        <div class="half-circle-gradient-box-right">
            <img class="half-circle-right" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png"
                alt="half circle shape">
        </div>
        <div class="medium-gradient-circle" id="medium-circle"></div>
        <div class="small-gradient-circle" id="small-circle"></div>
    </section>
    <section class="sponsors-section">
        <h2>Nos fiers commanditaires</h2>
        <div class="sponsors-container">
            <div class="sponsor-one">
                <img class="future-tech" src="/images/arttech_imgs/logo_sponsors/logo_futureTech.png"
                    alt="logo Future Tech">
            </div>
            <div class="sponsor-two">
                <img class="cstj" src="/images/arttech_imgs/logo_sponsors/logo-cstj.png" alt="Logo CSTJ">
            </div>
            <div class="sponsor-three">
                <img class="donutco" src="/images/arttech_imgs/logo_sponsors/donut_company_logo.png"
                    alt="Logo The German Donut Co.">
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <h2>Ce que les gens disent</h2>
        <div class="slider-container">
            <div class="slider-track">
                <div class="slider-item active">
                    <div class="testimonial">
                        <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                        <p>"J'ai été transporté dans un autre monde! Les expériences immersives d'Arttech Fest sont inoubliables!"</p>
                        <h4>Pierre L.</h4>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="testimonial">
                        <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                        <p>"Arttech Fest a été l'un des moments forts de ma vie. Les activités immersives étaient tellement réalistes et passionnantes!"</p>
                        <h4>Sophie C.</h4>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="testimonial">
                        <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                        <p>"J'ai adoré chaque minute passée à Arttech Fest. L'atmosphère immersive est unique et captivante!"</p>
                        <h4>Martin R.</h4>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="testimonial">
                        <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                        <p>"Si vous voulez vivre une expérience incroyable, ne manquez pas Arttech Fest! J'ai été émerveillé par les activités immersives proposées!"</p>
                        <h4>Isabelle V.</h4>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="slider-control prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="slider-control next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
 <x-footer></x-footer>
@endsection
