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
                @include('pages.op.stores.partials.index-events', [
                    'heading' => 'Available Kits',
                    'events' => $available
                ])
            @endif
            <br>
            @include('pages.op.stores.partials.index-events', [
                'heading' => 'Past Kits',
                'events' => $past
            ])
        </div>
    </div>
@stop
