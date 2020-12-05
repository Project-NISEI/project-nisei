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
                   <p>Netrunner is a two-player asymmetric card game set in a dystopian future where four megacorporations control almost every aspect of daily life. Legendary hackers known as "runners" aim to fight the corps' influence by hacking into their servers and preventing them from advancing their sinister agendas.</p>
                    <p>In Netrunner, one player takes the role of the Corp, whose tools include corporate assets and defensive programs called "ice". Using tools like these and the element of surprise, the Corp aims to advance their agendas to completion. Across the table, the Runner's objective is to infiltrate the Corp's servers and steal their agendas, and they'll draw on their resources, specialty hardware, and programs to do so. Of course, the Runner is no threat if they're dead, so a canny Corp may also attempt to "flatline" their opponent through damage--while the Runner's secondary path to victory is stalling the Corp long enough that they run out of opportunities.</p>
                    <p>Netrunner is a game designed for customization. Players can pick from dozens of Runner and Corp identity cards, each with their own unique abilities, and build custom decks around them. A unique "influence" system allows players to import a small number of cards into their deck from different factions, with the more distinctive cards typically costing more of that scarce deckbuilding resource. A meticulous Criminal might adopt an Anarch's destructive tools, but they can't take them all--they must carefully select what's most important to their strategy!</p>
                    <p>Can the Runner see through the Corp's bluffs and emerge victorious from their netspace siege, or will the Corp tighten their grip upon the world? Find out by playing Netrunner.</p>
                </div>
            </div>
        </div>
    </div>
@stop
