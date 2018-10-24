@extends('layouts.default')

@section('page-title', 'NISEI - FAQs?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'FAQs?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <p class="col-sm-12">{{ $test }}</p>
            </div>
        </div>
    </div>
@stop