@extends('layouts.default')

@section('page-title', 'Project NISEI - ' . $event->name)

@section('content')

    @include('partials.main-title', [
        'heading' => $event->name
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {!! $event->name !!}
                </div>
            </div>
        </div>
    </div>
@stop