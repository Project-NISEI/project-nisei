@extends('layouts.default')

@section('page-title', 'NISEI - Blog')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Blog'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row" data-masonry='{ "itemSelector": ".grid-item"}'>
                @foreach ($articles as $article)
                    <div class="col-sm-12 col-lg-6 grid-item">
                        <a class="article-card" href="/article/{{ $article->slug }}">
                            @if ($article->listing_image)
                                <img src="{{ $article->listing_image }}" alt="{{ $article->title }}" class="article-card__image">
                            @endif
                            <p class="article-card__name">{{ $article->title }}</p>
                            <p class="article-card__meta">By {{ $article->author_name }} | {{ $article->published_at }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop