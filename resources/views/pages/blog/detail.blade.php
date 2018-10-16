@extends('layouts.default')

@section('page-title', 'NISEI - ' . $article->title)

@section('content')

    @include('partials.main-title', [
        'heading' => $article->title
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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