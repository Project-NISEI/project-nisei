@extends('layouts.default')

@section('page-title', 'Project NISEI - Blog')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Blog'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                @foreach ($articles as $article)
                    <a class="col-sm-12 col-lg-6 article-card" href="/blog/{{ $article->slug }}">
                        <p class="article-card__name">{{ $article->title }}</p>
                        <p class="article-card__date">{{ $article->published_at }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@stop