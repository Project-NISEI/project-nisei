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
                @endforeach
            </div>
        </div>
    </div>
@stop