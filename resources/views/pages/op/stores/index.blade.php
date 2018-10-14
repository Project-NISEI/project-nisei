@extends('layouts.default')

@section('page-title', 'Project NISEI - Organised play')

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
                </div>
                @foreach ($events as $event)
                    <a class="col-sm-12" href="/op/for-stores/{{ $event->slug }}">
                        {{ $event->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop