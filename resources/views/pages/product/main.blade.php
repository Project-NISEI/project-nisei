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
	    @if( count($subpages) > 0 )
            <div class="row">
                <div class="col-sm-12">
		    <hr>
		    <p>More about {{ $product->title }}:</p>
		    <ul>
			@foreach($subpages as $subpage)
			<li><a href="{{$subpage->slug}}">{{$subpage->title}}</a></li>
			@endforeach
		    </ul>
                </div>
            </div>
	    @endif
        </div>
    </div>
@stop
