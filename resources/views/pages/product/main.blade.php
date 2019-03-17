@extends('layouts.default')

@section('page-title', 'NISEI - ' . $product->title)
@if ($product->listing_image)
  @section('opengraph-image', url($product->listing_image))
@endif

@section('content')

    @include('partials.main-title', [
        'heading' => $product->title
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 article-content">
                    {!! $product->content !!}
                </div>
            </div>
        </div>
    </div>
@stop
