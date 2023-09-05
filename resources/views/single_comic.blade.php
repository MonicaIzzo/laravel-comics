@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', $comics['title'])


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div id="single_comic" class="container">


        <img src="" alt="thumb">
        <h1>ACTION COMICS</h1>
        <section id="prince">
            <h4>Prezzo</h4>
        </section>
        <p>descrizione</p>
        <section id="dettagli">
            <div id="talent">
                <h4>TALENT</h4>
                <h5>Art by:</h5>
                artists
                <h5>Written by:</h5>
                writers
            </div>
            <div id="specs">
                <h4>SPECS</h4>
                <h5>Series:</h5>
                series
                <h5>Prezzo:</h5>
                sale_date
                <h5>On Sale Date:</h5>
                sale_date
            </div>
        </section>

    </div>

@endsection
