<link rel="stylesheet" href="{{ asset('css/activities/activities.css') }}">
<body>
<x-navbar></x-navbar>
{{-- @dd($activities) --}}
    <div id="app">
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

        <div class="sitemap">
            <img src="{{ asset('images/general/pw2_sitemap_01.webp') }}" usemap="#image-map">

            <map name="image-map">
                {{-- <area target="" alt="Sitemap" title="Sitemap" href="" coords="413,80,1213,215,1099,863,920,903,776,976,678,998,649,886,596,780,492,400,355,429" shape="poly"> --}}
                <area class="mapping" target="" alt="Mapping video" title="MappingVideo" href="{{ url('/activities') }}" coords="412,82,627,116,596,384,355,425" shape="poly">
                <area target="" alt="Conferences" title="Conferences" href="" coords="594,386,797,357,738,136,628,116" shape="poly">
                <area target="" alt="Rest area" title="RestArea" href="" coords="738,136,1213,216,1099,861,945,896,912,793,977,757,1027,403,796,357" shape="poly">
                <area target="" alt="Escape games" title="EscapeGames" href="" coords="709,576,552,619,490,400,756,363" shape="poly">
                <area target="" alt="Drone launching site" title="DroneSite" href="" coords="553,618,709,573,758,781,621,829" shape="poly">
                <area target="" alt="Admin" title="Admin" href="" coords="621,829,757,781,857,811,900,911,678,996" shape="poly">
                <area target="" alt="Parking" title="Parking" href="" coords="901,911,859,811,758,780,710,573,756,366,797,357,1026,404,976,756,912,792,947,893" shape="poly">
            </map>
        </div>
    </div>
    <x-footer></x-footer>
</body>