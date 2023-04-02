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
            @foreach ($articles as $article)
                <div class="container-actualites">
                    <div class="actualite-card">
                        <div class="actualite-image-box">
                            <img src="{{ asset('images/articles/' . $article->picture) }}"
                                alt="Image d'un articles (actualité de arttech)">
                        </div>
                        <div class="card-content">
                            <span class="title">{{ $article->name }}</span>
                            <span class="content">{{ $article->description }}</span>
                            <span class="date">{{ $article->created_at }}</span>
                            <span class="lire-plus"><a href="#">Lire plus &#8594;</a></span>
                        </div>
                    </div>
            @endforeach
            </div>
            {{-- <a href="" class="button1">button</a> --}}
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
            <a href="button1">Réservez maintenant!</a>


        </section>
    </main>
    <x-footer></x-footer>
@endsection
