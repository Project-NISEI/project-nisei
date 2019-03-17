@extends('layouts.default')

@section('page-title', 'NISEI - ' . $subpage->title)

@section('content')

    @include('partials.main-title', [
        'heading' => $subpage->title
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 article-content">
                    {!! $subpage->content !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 article-content">
                    <p><a href="/products/{{ $subpage->product_slug }}">Back to {{ $subpage->product_title }}</a></p>
                </div>
            </div>
        </div>
    </div>
@stop
