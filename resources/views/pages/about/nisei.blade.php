@extends('layouts.default')

@section('page-title', 'NISEI - Who or what is NISEI?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Who or what is NISEI?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>The Nextrunner International Support & Expansion Initiative (NISEI) is a fan-run organization, with the mission to keep the game alive and thriving after the end of the official FFG era.</p>
                    <p>For this, we will be arranging prizes for casual game nights plus Store and Regional Championship competitive events, as well as arranging our own at the National and World Championship levels. In addition, we will be continuing the FFG tradition of updates to the rules and Most Wanted List, releasing new NISEI designed cards, and rotating the card pool to keep the meta environment fresh.</p>
                    <p>Below you will find a list of the current NISEI board members, find us on stimhack.slack.com in the #NISEI channel, on Twitter as @ProjectNISEI or via email to projectNISEI@gmail.com if you want more information. </p>
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