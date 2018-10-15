@extends('layouts.default')

@section('page-title', 'NISEI')

@section('content')

    @include('partials.main-title', [
        'heading' => 'NISEI'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>What we do</span></h4>
                    <p>The Nextrunner International Support & Expansion Initiative (NISEI) is a fan-run organization to keep the game (Android: Netrunner) alive and thriving by establishing a new, non-FFG, means of supporting the player-base and creating content.</p>
                    <hr>
                    <h5>First time here here?</h5>
                    <p>Find out more about Android: Netrunner <a href="/about/netrunner">here</a>, and Project: NISEI <a href="/about/nisei">here.</a></p>
                </div>
            </div>
        </div>
    </div>

@stop