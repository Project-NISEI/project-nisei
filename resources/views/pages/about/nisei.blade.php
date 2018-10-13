@extends('layouts.default')

@section('page-title', 'Project NISEI - Who or what is Project NISEI?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Who or what is Project NISEI?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>The Nextrunner International Support & Expansion Initiative (NISEI) is a fan-run organization to keep the game alive and thriving by establishing a new, non-FFG, means of supporting the player-base and creating content: Rules updates, ban list updates, tournaments, prizes, and more. Basically, everything is on the table.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>The Board</span></h4>
                </div>
                @foreach ($users as $user)<!--
                    --><div class="col-sm-12 col-md-6 col-lg-3 board-member">
                        <span class="board-member__name">{{ $user->name }}</span>
                        <span class="board-member__pronouns">{{ $user->pronouns }}</span>
                        <span class="board-member__position">{{ $user->position_name }}</span>
                    </div><!--
                -->@endforeach
            </div>
        </div>
    </div>
@stop