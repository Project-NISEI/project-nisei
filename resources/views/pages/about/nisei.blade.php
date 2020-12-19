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
                    <p>The Nextrunner International Support & Expansion Initiative (NISEI) is a fan-run nonprofit all-volunteer organization. Our mission is to keep the game alive and thriving after the end of the official FFG era.</p>
                    <p>We arrange prize kits for casual game nights, known as GNKs, and Store and Regional Championship competitive events. We alo organize our own tournaments at the National, Continental and World Championship levels.</p>
                    <p>We design, playtest, and release our own sets of cards for the wider Netrunner community to enjoy, beginning with our first set, <em><a href="https://nisei.net/products/Downfall">Downfall</a></em>. In addition to cultivating the card pool through new releases, we also manage the rotation of older cards to keep the competitive environment fresh. Since we strive for a competitive scene that supports a robust diversity of decks, our teams monitor trends in the meta and use the NISEI Ban List (formerly known as the Most Wanted List, or MWL) to ban cards that lead to an unhealthy environment. Finally, our rules team maintains the ever-evolving rules documents that make the game possible.</p>
                    <p>Below you will find a list of the current NISEI board members. Find us on <a rel="noreferrer noopener" href="https://stimhack.slack.com" target="_blank">stimhack.slack.com</a> in the #NISEI-general and #future channels, on Twitter as <a rel="noreferrer noopener" href="https://twitter.com/projectnisei" target="_blank">@ProjectNISEI</a>, and on Facebook as <a href="https://www.facebook.com/NetrunnerNISEI">NISEI</a>. You can also contact us via email at <a href="mailTo:projectNISEI@gmail.com">projectNISEI@gmail.com</a> if you want more information.</p>
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
