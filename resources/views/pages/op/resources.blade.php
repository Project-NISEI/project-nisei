@extends('layouts.default')

@section('page-title', 'NISEI - Organised play')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Resources'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>For Players and Organizers</h2>
                    <ul>
                        <li><a href="/files/Comprehensive_Rules_1.1.pdf">NISEI Comprehensive Rules version 1.1</a></li>
                        <li><a href="/files/System_Core_2019.pdf">System Core 2019 Card List</a></li>
                        <li><a href="/files/Organized_Play_Policies.pdf">Organized Play Policies</a></li>
                        <li><a href="/files/Formats_-_November_2018.pdf">Organized Play Formats</a></li>
                        <li><a href="/files/Easy_Rotation_Guide_-_Q4_2018.pdf">Easy Rotation Guide</a></li>
                        <li><a href="/files/Decklists.pdf">Blank Decklist Template</a></li>
                        <li><a href="/files/Nametag_Stickers_-_14_Avery_7163.pdf">Nametag Stickers - 14 Avery 7163</a></li>                        
                    </ul>
                    <h2>For Organizers</h2>
                    <p>Note that the handwritten proxy templates are only intended for use by tournament staff. Handwritten proxies are not allowed in general. Please refer to the <a href="/files/Organized_Play_Policies.pdf">Organized Play Policies</a> for full details of the proxy policy.</p>
                    <ul>
                        <li><a href="/op/kit-policies">Event Kit Policies & FAQ</a></li>
                        <li><a href="/files/Handwritten_Proxy_Template.pdf">Handwritten Proxy Template</a></li>
                        <li><a href="/files/Handwritten_Proxy_Template_%28Textless%29.pdf">Handwritten Proxy Template (Textless)</a></li>
                        <li><a href="/files/Double_Elimination_Bracket_-_4_Players.pdf">Double Elimination Bracket - 4 Players</a></li>
                        <li><a href="/files/Double_Elimination_Bracket_-_8_Players.pdf">Double Elimination Bracket - 8 Players</a></li>
                        <li><a href="/files/Double_Elimination_Bracket_-_16_Players.pdf">Double Elimination Bracket - 16 Players</a></li>
                    </ul>
                    <h5>Event Posters</h5>
                    <ul>
                        <li><a href="/files/Q1_GNK_Poster_A4.png">Q1 GNK Poster (A4)</a></li>
                        <li><a href="/files/q1_gnk_poster_a3.png">Q1 GNK Poster (A3)</a></li>
                        <li><a href="/files/Store_Championship_Poster_%28A4%29.png">Store Championship Poster (A4)</a></li>
                        <li><a href="/files/Store_Championship_Poster_%28A3%29.png">Store Championship Poster (A3)</a></li>                        
                        <li><a href="/files/Q2_GNK_Poster_A4.png">Q2 GNK Poster (A4)</a></li>
                        <li><a href="/files/Q2_GNK_Poster_A3.png">Q2 GNK Poster (A3)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
