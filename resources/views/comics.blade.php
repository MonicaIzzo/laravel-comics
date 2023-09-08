@extends('layouts.layout')

{{-- Setto il titolo della pagina --}}
@section('title', 'Home')

{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <div class="comics">
        <div id="cards" class="container">
            <ul class="cards-items">
                <!-- Statico -->
                <!--<li>
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
                                                                    </li> -->
                <!-- Dinamico -->
                @foreach ($comics as $comic)
                    <li>
                        <!-- Attenzione i thumb non li prende perchè sono tutti rotti i link -->
                        <a href="{{ route('single_comic', ['index' => $loop->index]) }}">
                            <img class="items" src={{ $comic['thumb'] }} alt={{ $comic['title'] }}>
                        </a>
                        <div class="description">
                            <div class="title">{{ $comic['title'] }}</div>
                        </div>
                    </li>
                @endforeach

            </ul>
            <div class="load">
                <a class="load_more">LOAD MORE</a>
            </div>
        </div>
    </div>
@endsection
