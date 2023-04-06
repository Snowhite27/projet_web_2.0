<x-head></x-head>
<title>ArtTech Fest || Réservations</title>
<button class="scroll-top"> <i class="fa-solid fa-chevron-up"></i></button>
<body>
    <main>
        <div id="app">
            <div>
                <h1>Réservations</h1>
                <h2>Forfaits</h2>
                <p class="dave">Sélectionnez un forfaits qui vous convient</p>
            </div>
            <section class="packages">

                @foreach ($packages as $package)
                    <div class="package  @if (strtolower($package->name) == 'lord') lord @endif">

                        <h3>{{ ucfirst($package->name) }}</h3>

                        <div class="prices">
                            <p class="price">{{ $package->price }}$</p>
                            <p class="day">{{ $package->duration }}</p>
                        </div>

                        <div id="page" class="site">
                            @if (!isset(Auth::user()->first_name))
                                <a href="{{ route('login', $package->id) }}" class="button2">Réservez</a>
                            @else
                                <a href="{{ route('packages', $package->id) }}"
                                    @click.prevent="showPackage({{ $package }}, {{ Auth::user()->id }})"
                                    class="button2">Réservez</a>
                            @endif
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

            <section class="validation" v-if="Object.keys(select_package).length != 0">

                <h2>Calendrier</h2>
                <p>Validez votre date et confirmez votre réservation.</p>
                {{-- *********************** CALENDAR ************************** --}}

                <div class="layout" v-if="month != 3">
                    <p>Le festival n'est pas disponible dans ces dates</p>
                </div>
                <div class="calendar">

                    <div class="days_container">

                        <h3>@{{ month_string + " " + year }}</h3>

                        <div class="week">
                            <div class="week_day">DIM</div>
                            <div class="week_day">LUN</div>
                            <div class="week_day">MAR</div>
                            <div class="week_day">MER</div>
                            <div class="week_day">JEU</div>
                            <div class="week_day">VEN</div>
                            <div class="week_day">SAM</div>
                        </div>

                        <div class="days">
                            <div class="b_day" v-for="date of calendar.blank_starting_days">
                                @{{ date.blank_starting_days }}
                            </div>

                            <div class="day" v-for="date of calendar.days"
                                @click.prevent="selectDate(date.date_unix_time, select_package)"
                                :class="{
                                    'selected': selected == date.date_unix_time,
                                    'endSelected': select_date_end >= (date.date_unix_time*1000) && selected < date.date_unix_time,
                                }">
                                @{{ date.date }}
                            </div>

                            <div class="b_day" v-for="date of calendar.blank_ending_days">
                                @{{ date.blank_ending_days }}
                            </div>
                        </div>

                    </div>

                    {{-- *********************** USER_INFOS ************************** --}}
                    @if (isset(auth()->user()->id))
                        <div class="user_infos">

                            <div class="username">
                                <p><strong>Nom</strong></p>
                                <p class="opacity">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                </p>
                            </div>

                            <div class="reservation_date">
                                <p><strong>Date de début du forfait</strong></p>
                                <p class="gold">@{{ set_date_string }}</p>
                            </div>

                            <div class="reservation_date_end">
                                <p><strong>Date de fin du forfait</strong></p>
                                <p class="gold">
                                    @{{ set_date_string_end }} </p>
                            </div>

                            <div class="address">
                                <p><strong>Adresse</strong></p>
                                <p class="opacity">7812 Richmond Street,
                                    Quebec, ON,
                                    Canada
                                </p>
                            </div>

                        </div>
                    @endif

                    {{-- *********************** PACKAGES ************************** --}}

                    <div class="validation_package">

                        <h3> @{{ strUcFirst(select_package.name || "") }}</h3>

                        <div class="validation_prices">
                            <p class="validation_price">@{{ select_package.price }}$</p>
                            <p class="day">@{{ select_package.duration }}</p>
                        </div>



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
                            <a href="#list"
                                @click="saveReservation(select_package.id, user_id, select_date, select_date_end )"
                                class="button2">Commander</a>
                        </div>

                    </div>

                </div>
            </section>
            <section  id="list">
                <h2>Vos réservations</h2>
                <p>Voici votre liste des réservations de vos forfaits. Si vous deviez supprimer un forfait, il vous est
                    possible si cela ne dépasse pas 24h avant l'évènement.</p>
                {{-- @if (isset($user_packages)) --}}
                <div class="container_list">
                    <div class="reservation_title">
                        <div class="width">
                            <strong>Date de création</strong>
                        </div>
                        <div class="width">
                            <strong>Forfait</strong>
                        </div>
                        <div class="width">
                            <strong>Date de début</strong>
                        </div>
                        <div class="width">
                            <strong>Date de fin </strong>
                        </div>
                        <div class="width">
                            &nbsp;
                        </div>
                    </div>

                    <div class="reservation_container">
                        @foreach ($reservations as $reservation)
                            <div class="reservation_list">
                                <div class="width">
                                    {{ $reservation->created_at }}
                                </div>
                                <div class="width">
                                    <p>{{ $reservation->package->name }}</p>
                                </div>
                                <div class="width">
                                    <p>@verbatim {{ convertDate( @endverbatim {{ $reservation->event_date }} @verbatim ) }} @endverbatim</p>
                                </div>
                                <div class="width">
                                    <p>@verbatim {{ convertDate( @endverbatim {{ $reservation->event_date_end }} @verbatim ) }} @endverbatim</p>
                                </div>
                                <a
                                 href="{{ route('delete', $reservation->id) }}"v-show="actual_date < {{ date('d', $reservation->event_date/1000) }} ">Supprimer
                                </a>
                                <p class="hidden"
                                    v-show="actual_date > {{ date('d', $reservation->event_date/1000) }} ">Supprimer
                                </p>

                            </div>

                        @endforeach
                    </div>
                </div>
        </div>
        {{-- @endif --}}
        </section>
    </main>
    <x-footer></x-footer>
    </div>
    <script src="{{ asset('js/reservations.js') }}" type="module"></script>
    <script src="{{ asset('js/scroll-top.js') }}" type="module"></script>
</body>
