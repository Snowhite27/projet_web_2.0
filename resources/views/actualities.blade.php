@extends('layouts.news')
@section('title', 'Actualités | Arttech')

@section('content')
    <x-navbar></x-navbar>
    <main>
        <section class="actualites">
            <div class="section-header-content">
                <h1>Actualités</h1>
                <p>"Envie de rester à jour sur les dernières tendances technologiques ? Découvrez nos articles passionnants
                    et soyez au courant des dernières avancées."</p>
            </div>
            <div class="container-actualites">
                <div class="actualite-card">
                    <div class="actualite-image-box">
                        <img src="/images/actualites/dummy_image.png" alt="dummy image">
                    </div>
                    <div class="card-content">
                        <span class="title">LOREM IPSUM</span>
                        <span class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod...</span>
                        <span class="date">10 mars 2023</span>
                        <span class="lire-plus"><a href="#">Lire plus &#8594;</a></span>
                    </div>
                </div>
                <div class="actualite-card">
                    <div class="actualite-image-box">
                        <img src="/images/actualites/dummy_image.png" alt="dummy image">
                    </div>
                    <div class="card-content">
                        <span class="title">LOREM IPSUM</span>
                        <span class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod...</span>
                        <span class="date">10 mars 2023</span>
                        <span class="lire-plus"><a href="#">Lire plus &#8594;</a></span>
                    </div>
                </div>
                <div class="actualite-card">
                    <div class="actualite-image-box">
                        <img src="/images/actualites/dummy_image.png" alt="dummy image">
                    </div>
                    <div class="card-content">
                        <span class="title">LOREM IPSUM</span>
                        <span class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod...</span>
                        <span class="date">10 mars 2023</span>
                        <span class="lire-plus"><a href="#">Lire plus &#8594;</a></span>
                    </div>
                </div>
            </div>
            <a href="" class="button1">button</a>
        </section>
        <section class="next-event">
            <video autoplay loop muted>
                <source src="/video/production ID_4916813.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="immersion-box">
                <div class="event-content">
                    <h2>Prochaine immersion</h2>
                    <p>Ne manquez pas notre prochaine représentation qui va commencer dans : </p>
                </div>
            </div>
            <div class="countdown-container">
                <div class="countdown-square">
                    <span class="countdown-time" id="days"></span>
                    <span class="countdown-abbr">DAYS</span>
                </div>
                <div class="countdown-square">
                    <span class="countdown-time" id="hours"></span>
                    <span class="countdown-abbr">HOURS</span>
                </div>
                <div class="countdown-square">
                    <span class="countdown-time" id="minutes"></span>
                    <span class="countdown-abbr">MINUTES</span>
                </div>
                <div class="countdown-square">
                    <span class="countdown-time" id="seconds"></span>
                    <span class="countdown-abbr">SECONDS</span>
                </div>
            </div>
            <x-button>
                Reserver Maintenant
            </x-button>
        </section>
    </main>
    <x-footer></x-footer>
@endsection
