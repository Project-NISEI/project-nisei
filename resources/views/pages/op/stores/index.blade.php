@extends('layouts.default')

@section('page-title', 'Project NISEI - ')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Organised Play For Stores'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <a class="col-sm-12" href="/op/for-stores/{{ $event->slug }}">
                        {{ $event }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop