@extends('layouts.default')

@section('page-title', 'NISEI - FAQs?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'FAQs?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                @foreach ($faqs as $faq)
                    <div class="col-sm-12">
                        <h2>{{ $faq->question }}</h2>
                        <p>{!! $faq->answer !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop