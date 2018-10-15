@extends('layouts.default')

@section('page-title', 'NISEI - What is Netrunner?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'What is Netrunner?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-7">
                    <p>Android: Netrunner is a two-player Living Card Game® set in a dystopian, cyberpunk future where monolithic megacorps own and control the vast majority of human interests.</p>
                    <p>While corporation players try to score points by advancing their agendas, they have to guard their intellectual properties from the elite and subversive hackers known as netrunners. Netrunners attempt to win the game by stealing the corp's agendas, by any means possible!</p>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <img class="page-content__image" src="/assets/images/revised-core.png" alt="Android: Netrunner Revised Core Set">
                </div>
            </div>
        </div>
    </div>
@stop