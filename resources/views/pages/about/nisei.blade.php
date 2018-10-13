@extends('layouts.default')

@section('page-title', 'Project NISEI - Who or what is Project NISEI?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Who or what is Project NISEI?'
    ])


    {{ $users }}
@stop