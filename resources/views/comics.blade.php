@extends('layouts.layout')


{{-- Setto il titolo della pagina --}}
@section('title', 'Home')


{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="comics">
        <div id="cards" class="container">
            <ul class="cards-items">
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
                <li>
                    <img class="items" src={{ Vite::asset('resources/img/card.jpg') }} alt="">
                    <div class="description">
                        <div class="title">Title</div>
                    </div>
                </li>
            </ul>
            <div class="load">
                <a class="load_more">LOAD MORE</a>
            </div>
        </div>
    </div>
@endsection
