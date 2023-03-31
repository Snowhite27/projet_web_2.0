@extends('layouts.homepage')

@section('title', 'Accueil | Arttech')
<x-navbar></x-navbar>

<section class="hero-section">
    <video autoplay loop muted>
        <source src="/video/arttech_intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        <h1>LOREM IPSUM CALIBRI DOS</h1>
        <p>*Limited Tickets Available</p>
        <x-button>
            SOLD OUT
        </x-button>
    </div>
</section>
<section class="story-section">
    <div class="rectangle-gradient"></div>
    <div class="half-circle-gradient-box">
        <img class="half-circle" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png" alt="half circle shape">
    </div>
    <div class="img-story-container">
        <img class="arttech-expo" src="/images/arttech_imgs/homepage_imgs/section_histoire/arttech_histoire.webp"
            alt="man wearing a vr headset in an expo">
    </div>
    <div class="story-content">
        <h2>LOREM IPSUM proident <span style="color: #F9B96F;">Cupid larborum</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. </p>
    </div>
    <div class="deco-dots-container">
        <img class="circle-dots" src="/images/arttech_imgs/custom_shapes/colored_dots.png"
            alt="decorative colorful dots aligned on top of each other">
    </div>
</section>
<section class="activities-section">
    <div class="gallery-container">
        <div class="activity_one">
            <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_audio_visuel.png"
                alt="immersive audio visual">
        </div>
        <div class="activity_two">
            <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_xtra.png"
                alt="immersive vr lightshow">
        </div>
        <div class="activity_three">
            <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_drone.png"
                alt="immersive drone show">
        </div>
        <div class="activity_four">
            <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_vr.png"
                alt="immersive vr experimented by a couple">
        </div>
        <div class="activity_five">
            <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_projection.png"
                alt="immersive light projection on walls">
        </div>
    </div>
    <div class="activities-content">
        <h2>LOREM IPSUM proident <span style="color: #F9B96F;">Cupid larborum</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. </p>
        <x-button>
            RESERVE NOW
        </x-button>
    </div>
</section>
<section class="news-section">
    <div class="news-content">
        <h2>LOREM <span style="color: #F9B96F;">Cupid larborum</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. </p>
        <br>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
        <x-button>
            SAVOIR PLUS
        </x-button>
    </div>
    <div class="news-image-container">
        <img class="news" src="/images/arttech_imgs/homepage_imgs/section_actualite/cercle_actualite_img.png"
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
    <div class="medium-gradient-circle"></div>
    <div class="small-gradient-circle"></div>
</section>
<section class="sponsors-section">
    <h2>Lorem Ipsum Ragazi</h2>
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
    <h2>Lorem ipsum dolor sit amet</h2>
    <div class="slider-container">
        <div class="slider-track">
            <div class="slider-item active">
                <div class="testimonial">
                    <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor
                        velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan
                        velit ornare. Suspendisse euismod."</p>
                    <h4>John Doe</h4>
                </div>
            </div>
            <div class="slider-item">
                <div class="testimonial">
                    <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor
                        velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan
                        velit ornare. Suspendisse euismod."</p>
                    <h4>Jane Smith</h4>
                </div>
            </div>
            <div class="slider-item">
                <div class="testimonial">
                    <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor
                        velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan
                        velit ornare. Suspendisse euismod."</p>
                    <h4>Mike Johnson</h4>
                </div>
            </div>
            <div class="slider-item">
                <div class="testimonial">
                    <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor
                        velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan
                        velit ornare. Suspendisse euismod."</p>
                    <h4>Samantha Lee</h4>
                </div>
            </div>
            <div class="activity_five">
               <img src="/images/arttech_imgs/homepage_imgs/section_activites/activite_projection.png" alt="immersive light projection on walls">
            </div>
         </div>
         <div class="activities-content">
            <h2>LOREM IPSUM proident <span style="color: #F9B96F;">Cupid larborum</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <x-button>
               RESERVE NOW
            </x-button>
         </div>
      </section>
      <section class="news-section">
         <div class="news-content">
            <h2>LOREM <span style="color: #F9B96F;">Cupid larborum</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <br>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
            <x-button>
               SAVOIR PLUS
            </x-button>
         </div>
         <div class="news-image-container">
            <img class="news" src="/images/arttech_imgs/homepage_imgs/section_actualite/cercle_actualite_img.png" alt="world map immersive wall projection">
         </div>
         <div class="half-circle-gradient-box-left">
            <img class="half-circle-left" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png" alt="half circle shape">
         </div>
         <div class="half-circle-gradient-box-right">
            <img class="half-circle-right" src="/images/arttech_imgs/custom_shapes/half-circle-gradient.png" alt="half circle shape">
         </div>
         <div class="medium-gradient-circle"></div>
         <div class="small-gradient-circle"></div>
      </section>
      <section class="sponsors-section">
         <h2>Lorem Ipsum Ragazi</h2>
         <div class="sponsors-container">
            <div class="sponsor-one">
               <img class="future-tech" src="/images/arttech_imgs/logo_sponsors/logo_futureTech.png" alt="logo Future Tech">
            </div>
            <div class="sponsor-two">
               <img class="cstj" src="/images/arttech_imgs/logo_sponsors/logo-cstj.png" alt="Logo CSTJ">
            </div>
            <div class="sponsor-three">
               <img class="donutco" src="/images/arttech_imgs/logo_sponsors/donut_company_logo.png" alt="Logo The German Donut Co.">
            </div>
         </div>
      </section>
      <section class="reviews-section">
         <h2>Lorem ipsum dolor sit amet</h2>
         <div class="slider-container">
            <div class="slider-track">
               <div class="slider-item active">
                  <div class="testimonial">
                     <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                     <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan velit ornare. Suspendisse euismod."</p>
                     <h4>John Doe</h4>
                  </div>
               </div>
               <div class="slider-item">
                  <div class="testimonial">
                     <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                     <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan velit ornare. Suspendisse euismod."</p>
                     <h4>Jane Smith</h4>
                  </div>
               </div>
               <div class="slider-item">
                  <div class="testimonial">
                     <img src="/images/arttech_imgs/review_custom_icons/male_review.png" alt="Avatar">
                     <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan velit ornare. Suspendisse euismod."</p>
                     <h4>Mike Johnson</h4>
                  </div>
               </div>
               <div class="slider-item">
                  <div class="testimonial">
                     <img src="/images/arttech_imgs/review_custom_icons/female_review.png" alt="Avatar">
                     <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id purus tristique, porttitor velit sit amet, commodo justo. Pellentesque pharetra magna et orci feugiat, ut accumsan velit ornare. Suspendisse euismod."</p>
                     <h4>Samantha Lee</h4>
                  </div>
               </div>
            </div>
            <div class="slider-controls">
               <button class="slider-control prev"><i class="fa-solid fa-chevron-left"></i></button>
               <button class="slider-control next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
         </div>
      </section>
