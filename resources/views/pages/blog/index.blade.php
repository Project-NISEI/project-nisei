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
                    <div class="col-sm-12 col-lg-6">
                        <a class="article-card" href="/blog/{{ $article->slug }}">
                            <p class="article-card__name">{{ $article->title }}</p>
                            <p class="article-card__meta">By {{ $article->author_name }} | {{ $article->published_at }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop