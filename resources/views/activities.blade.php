<x-head></x-head>
<title>ArtTech Fest || Activités</title>
<body>
    <div id="app">
        <div class="container">
            <div class="list">
                @foreach ($activities as $activity)
                    <div class="activity">
                        <div class="picture">
                            <img src="{{ asset('images/activities/' . ($activity->picture)) }}" alt="Activité réalité virtuelle">
                        </div>
                        <div class="text">
                            <h3>{{ $activity->name }}</h3><br>
                            <p>{{ $activity->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <script type="text/javascript">
                function swapPic(zone,nr){
                var pic=document.getElementById('hovered')
                pic.src='../images/general/' +nr+ '.png'
                zone.onmouseout=function(){pic.src="{{ asset('images/general/pw2_sitemap_01.webp') }}"}
                }
            </script>

            <div id="pic" style="height: auto; width: auto; background-image: url({{ asset('images/general/pw2_sitemap_01.webp') }}); background-repeat: no-repeat">
                <img id="hovered" src="{{ asset('images/general/pw2_sitemap_01.webp') }}" usemap="#image-map"/>
                <map name="image-map">
                    <area onmouseover="swapPic(this,1)" target="" alt="mapping video" title="" href="#" coords="133,27,328,58,311,329,72,373" shape="poly">
                    <area onmouseover="swapPic(this,2)" target="" alt="conference" title="" href="" coords="329,57,442,78,502,293,313,327" shape="poly" class="highlight" @mouseover="highlightArea(2)" @mouseout="resetHighlight">
                    <area onmouseover="swapPic(this,3)" target="" alt="VR" title="" href="" coords="442,77,924,160,888,349,504,293" shape="poly">
                    <area onmouseover="swapPic(this,4)" target="" alt="Escape room" title="" href="" coords="204,351,383,316,431,525,267,571" shape="poly">
                    <area onmouseover="swapPic(this,5)" target="" alt="Drone" title="" href="" coords="431,527,490,753,347,797,305,707,267,572" shape="poly">
                </map>
                <h2>Plan du site</h2>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/activities.js') }}" type="module"></script>
</body>
<x-footer></x-footer>
