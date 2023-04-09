@extends('layouts.app')

@section('content')
    <section class="main_section">
        <div class="main_jumbo">
            <div class="bg_color">
                <main class="container">
                    <div class="main_ticket">
                        CURRENT SERIES
                    </div>
                    @foreach ($comics as $comic)
                        <div class='card'>
                            <img src="{{ $comic ['thumb']}}" alt="">
                            <h3>{{ $comic ['title'] }}</h3>
                        </div>
                    @endforeach
                    LOAD MORE
                </main>
            </div>
        </div>
    </section>

@endsection

