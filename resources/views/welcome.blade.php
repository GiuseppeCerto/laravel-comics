@extends('layouts.app')

@section('content')
    <section class="main_section">
        <div class="main_jumbo"></div>
        <div class="bg_color">
            <div class="main_container">
                <div class="main_ticket">
                        CURRENT SERIES
                </div>
                @foreach ($comics as $comic)
                    <div class='card_comic'>
                        <img src="{{ $comic ['thumb']}}" alt="">
                        <div class="card_title">{{ $comic ['series'] }}</div>
                    </div>
                @endforeach
                <div class="main_button">
                    LOAD MORE
                  </div>
            </div>
        </div>
    </section>
    <section class="merch_section">
        <div class="container menu_item_flex">
            <div class="merch_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="merch_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="merch_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="merch_item">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="merch_item">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>

@endsection

