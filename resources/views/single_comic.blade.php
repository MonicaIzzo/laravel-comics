@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
{{-- @section('title', $comics['title']) --}}

@section('title', 'Single Comic')
{{-- Setto il main della pagina (che cambiera in base ai dati) --}}
@section('main_content')
    <div class="fascia"></div>
    <div class="main container">
        {{-- FASCIA BLU --}}
        <div id="single_comic">
            {{-- IMMAGINE --}}
            <div class="img-comic">
                <p class="type">COMIC BOOK</p>
                <img src={{ $comic['thumb'] }} alt={{ $comic['title'] }}>
                <p class="gallery">VIEW GALLERY</p>
            </div>
        </div>
        {{-- DETTAGLI --}}
        <div id="comic-decription">
            <h1>{{ $comic['title'] }}</h1>
            <section id="prince">
                <div class="prince_sx">
                    <h4>Prezzo: {{ $comic['price'] }}</h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="prince_dx">
                    <h4>Check Availsbility</h4>
                </div>
            </section>
            {{-- DESCRIZIONE --}}
            <p class="description">{{ $comic['description'] }}
            </p>

            <section id="footer">
                {{-- COLONNA SX --}}
                <div id="talent">
                    <h2>Talent</h2>
                    <div class="row">
                        <div class="column-1">
                            <h3>Art by:</h3>
                        </div>
                        <div class="column-2">
                            <h5>{{ $comic['description'] }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-1">
                            <h3>Written by:</h3>
                        </div>
                        <div class="column-2">
                            <h5>{{ $comic['description'] }}</h5>
                        </div>
                    </div>
                </div>


                {{-- COLONNA DX --}}
                <div id="specs">
                    <h2>Specs</h2>
                    <div class="row">
                        <div class="column-1">
                            <h3>Series:</h3>
                        </div>
                        <div class="column-2">
                            <h6 class="series">{{ $comic['series'] }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column-1">
                            <h3>U.S. Prezzo:</h3>
                        </div>
                        <div class="column-2">
                            <h5>{{ $comic['price'] }}</h5>
                        </div>
                    </div>


                    <div class="row">
                        <div class="column-1">
                            <h3>On Sale Date:</h3>
                        </div>
                        <div class="column-2">
                            <h5>{{ $comic['sale_date'] }}</h5>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    @endsection
