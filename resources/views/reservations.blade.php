<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservations</title>
    <link rel="stylesheet" href="{{ asset('css/scss/reservations/reservations.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/vko1nol.css">

</head>
{{-- @dd($packages); --}}

<body>
    <h1>Réservations</h1>

    <h2>Forfaits</h2>

    <section class="packages">

        @foreach ($packages as $package)
            <div class="package  @if (strtolower($package->name) == 'lord') lord @endif">

                <h3>{{ ucfirst($package->name) }}</h3>

                <div class="prices">
                    <p class="price">{{ $package->price }}$</p>
                    <p class="day">{{ $package->duration }}</p>
                </div>

                <div id="page" class="site">
                    <a href="#" class="button"><span>PW2_Button</span></a>
                </div>

                <div class="line"></div>

                <div class="details">
                    <p class="title">Détails du forfait</p>
                    <ul>
                        @foreach (explode("\r\n", $package->description) as $line)
                            <li>{{ ucfirst($line) }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="includes">
                    <p class="title">Inclusions</p>
                    <ul>
                        @foreach (explode("\r\n", $package->includes) as $line)
                            <div class="include">
                                <img src="{{ asset('icons/verifier.png') }}" width="20" height="20"
                                    alt="image d'un icone de crochet d'une checklist des inclusions">
                                <li>{{ ucfirst($line) }}</li>
                            </div>
                        @endforeach
                    </ul>
                </div>

            </div>
        @endforeach
    </section>
    <section class="validation">
        <h2>Validation</h2>
    </section>
</body>

</html>
