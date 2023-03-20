<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réservations</title>
    <link rel="stylesheet" href="{{ asset('css/reservations/reservations.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/vko1nol.css">

</head>
{{-- @dd($packages); --}}

<body>
    <h1>Réservations</h1>
    <div id="app">
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
                        <a href="{{ route('packages', $package->id) }}"
                            @click.prevent="showPackage({{ $package }})" class="button"><span>PW2_Button</span></a>
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
            {{-- *********************** CALENDAR ************************** --}}
            <div class="calendar">

                <h3>@{{ month_array + " " + year }}</h3>

                <div class="days_container">
                    <div class="week">

                    </div>
                    <div class="days">
                        <div class="day" v-for="date of calendar.blank_starting_days">
                            @{{ date.blank_starting_days }}
                        </div>

                        <div class="day" v-for="date of calendar.days">
                            @{{ date.date }}
                        </div>


                        <div class="day" v-for="date of calendar.blank_ending_days">
                            @{{ date.blank_ending_days }}
                        </div>
                    </div>
                </div>

            </div>
            {{-- *********************** USER_INFOS ************************** --}}
            <div class="user_infos">

            </div>
            {{-- *********************** PACKAGES ************************** --}}
            <div class="validation_package">

                <h3> @{{ strUcFirst(select_package.name || "") }}</h3>

                <div class="validation_prices">
                    <p class="validation_price">@{{ select_package.price }}$</p>
                    <p class="day">@{{ select_package.duration }}</p>
                </div>

                <div class="validation_line"></div>

                <div class="validation_details">
                    <p class="validation_title">Détails du forfait</p>
                    <ul v-for="line of details">
                        <li>@{{ strUcFirst(line) }}</li>
                    </ul>
                </div>

                <div class="validation_includes">
                    <p class="validation_title">Inclusions</p>
                    <ul v-for="line of inclusions">
                        <div class="validation_include">
                            <img src="{{ asset('icons/verifier.png') }}" width="20" height="20"
                                alt="image d'un icone de crochet d'une checklist des inclusions">
                            <li>@{{ strUcFirst(line) }}</li>
                        </div>
                    </ul>
                </div>

                <div id="page" class="site">
                    <a href="#" class="button"><span>PW2_Button</span></a>
                </div>
            </div>

        </section>
    </div>

    <script src="{{ asset('js/reservations.js') }}" type="module"></script>
</body>

</html>
