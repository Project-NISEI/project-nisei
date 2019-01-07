@extends('layouts.default')

@section('page-title', 'NISEI - Organised play')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Event Kits'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Purchase event kits below! All prices are in US dollars and include shipping.</p>
                    <p>See <a href="/op/kit-policies">Event Kit Policies & FAQ</a> for details about how you can use these kits.</p>
                </div>
            </div>
        </div>
        <div class="container">
            @php
                $available = [];
                $past = [];
                list($available, $past) = $events->partition(function ($event) {
                    return time() < strtotime($event->expires_on);
                });
            @endphp
            @if ($available->count() > 0)
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="headline"><span>Available Kits</span></h4>
                        <br>
                    </div>
                    @foreach ($available as $event)
                        @if (time() <= strtotime($event->expires_on))
                            <div class="col-sm-12 col-lg-6">
                                <a class="event-card" href="/op/available-kits/{{ $event->slug }}">
                                    @if ($event->listing_image)
                                        <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                                    @endif
                                    <p class="event-card__name">{{ $event->name }}</p>
                                    <p class="event-card__info">Base price: ${{ $event->price }}</p>
                                    <p class="event-card__info">On sale through: {{ date_format(date_sub(date_create($event->expires_on),date_interval_create_from_date_string("1 day")),"F j, Y") }} (UTC)</p>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>Past Kits</span></h4>
                    <br>
                </div>
                @foreach ($past as $event)
                    @if (time() > strtotime($event->expires_on))
                        <div class="col-sm-12 col-lg-6">
                            <a class="event-card" href="/op/available-kits/{{ $event->slug }}">
                                @if ($event->listing_image)
                                    <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                                @endif
                                <p class="event-card__name">{{ $event->name }}</p>
                                <p class="event-card__info">Base price: ${{ $event->price }}</p>
                                <p class="event-card__subtle">Ended: {{ $event->expires_on }}</p>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
