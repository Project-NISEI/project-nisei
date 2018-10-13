@extends('layouts.default')

@section('page-title', 'Project NISEI - ' . $article->title)

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
        </div>
    </div>
@stop