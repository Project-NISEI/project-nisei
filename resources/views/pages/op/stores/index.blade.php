@extends('layouts.default')

@section('page-title', 'NISEI - Organised play')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Organised Play For Stores'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Insert some intro content here, stores can purchase kits for active and upcoming waves of organised play.</p>
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
                        <a class="event-card" href="/available-kits/{{ $event->slug }}">
                            @if ($event->listing_image)
                                <img src="{{ $event->listing_image }}" alt="{{ $event->name }}" class="event-card__image">
                            @endif
                            <p class="event-card__name">{{ $event->name }}</p>
                            <p class="event-card__type">Type: {{ $event->type }}</p>
                            <p class="event-card__price">Price per kit: ${{ $event->price }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop