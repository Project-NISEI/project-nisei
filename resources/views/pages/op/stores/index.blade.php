@extends('layouts.default')

@section('page-title', 'NISEI - Organised play')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Available Prize Kits'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Purchase available prize kits below! All prices are in US dollars and include shipping.</p>
                    <p>See <a href="/op/kit-policies">Event Kit Policies & FAQ</a> for details about how you can use these kits.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>Available Kits</span></h4>
                    <br>
                </div>
                @foreach ($events as $event)
                    @if (time() <= strtotime($event->expires_on))
                        <div class="col-sm-12 col-lg-6">
                            <a class="event-card" href="/op/available-kits/{{ $event->slug }}">
                                @if ($event->listing_image)
                                    <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                                @endif
                                <p class="event-card__name">{{ $event->name }}</p>
                                <p class="event-card__info">Base price: ${{ $event->price }}</p>
                                <p class="event-card__info">On sale until: {{ $event->expires_on }}</p>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>Past Kits</span></h4>
                    <br>
                </div>
                @foreach ($events as $event)
                    @if (time() > strtotime($event->expires_on))
                        <div class="col-sm-12 col-lg-6">
                            <a class="event-card" href="/op/available-kits/{{ $event->slug }}">
                                @if ($event->listing_image)
                                    <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                                @endif
                                <p class="event-card__name">{{ $event->name }}</p>
                                <p class="event-card__info">Base price: ${{ $event->price }}</p>
                                <p class="event-card__info">On sale until: {{ $event->expires_on }}</p>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
