@extends('layouts.default')

@section('page-title', 'NISEI - What is Netrunner?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'What is Netrunner?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Netrunner is a two player, asymmetric card game set in a dystopian future where four megacorporations control almost every aspect of daily life. Fighting the Corp’s influence are Runners, legendary hackers who throw every tool they can muster to break into the corp’s servers…</p>
                    <p>Central to this battle are agendas, aspects of the Corp’s plan to increase its profits, or control over society. The corp tries to advance them to completion before the runner can steal them from one of the heavily protected servers. Of course dead runners are not a threat, so an alternative plan for the corp is to flatline their opponent, while the runner can stall the corp long enough to run their R&D out of opportunities.</p>
                </div>
            </div>
        </div>
    </div>
@stop