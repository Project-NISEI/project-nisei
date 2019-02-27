@extends('layouts.default')

@section('page-title', 'NISEI - ' . $article->title)
@if ($article->listing_image)
  @section('opengraph-image', url($article->listing_image))
@endif

@section('content')

    @include('partials.main-title', [
        'heading' => $article->title
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
		<p class="col-sm-12 article-meta">{{ $article->author_name }} | {{ $article->published_at }}</p>
                <div class="col-sm-12 article-content">
                    {!! $article->content !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <div id="disqus_thread"></div>
                </div>
            </div>
        </div>
    </div>
@stop
