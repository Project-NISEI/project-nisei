@extends('layouts.default')

@section('page-title', 'NISEI - Event Kit Policies & FAQ')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Event Kit Policies & FAQ'
    ])

    <div class="page-content">
        <div class="container">
            <h2>Contents</h2>
            <h4>Running Events</h4>
            <ul>
                    <li><a href="#where-to-get">Where can I get the most recent event kits?</a></li>
                    <li><a href="#scheduling">How do I avoid scheduling my event at the same time as another event? Is there a public listing of all events somewhere?</a></li>
                    <li><a href="#entry-fees">Can I collect an entry fee to cover the cost of the kit?</a></li>
                    <li><a href="#combining">Can I combine multiple kits, or use one kit for multiple events?</a></li>
                    <li><a href="#sanctioned">Alright, what's a “Sanctioned Event”?</a></li>
                    <li><a href="#private">Can I run a private event for friends or coworkers? What about at an 18+, 21+, or other age-restricted venue?</a></li>
            </ul>
            <h4>Game Night Kits</h4>
            <ul>
                    <li><a href="#restrictions">What restrictions are there on how and when I can run my event?</a></li>
            </ul>
            <h4>Store Championships</h4>
            <ul>
                    <li><a href="#sc-event">Do I have to run an event with my Store Championship kit, or can I keep the prizes for myself?</a></li>
                    <li><a href="#sc-prize-distribution">How are the prizes distributed for a Store Championship?</a></li>
                    <li><a href=sc-venue">What are the requirements for a venue? Does a Store Championship have to happen at a game store?</a></li>
                    <li><a href="#sc-format">Can I run a Store Championship in a format other than Standard?</a></li>
            </ul>
            <h4>Ordering</h4>
            <ul>
                    <li><a href="#ordering-email">Why didn’t I get a confirmation email?</a></li>
                    <li><a href="#ordering-cancelling">What if I need to cancel my order?</a></li>
                    <li><a href="#ordering-deadline">Can I order product after the deadline?</a></li>
            </ul>
            <h4>Shipping</h4>
            <ul>
                    <li><a href="#shipping-incorrect-info">I realized my shipping info on PayPal was incorrect! What do I do?</a></li>
                    <li><a href="#shipping-lost">What happens if a postal service loses my package?</a></li>
                    <li><a href="#shipping-tracking">How do I get a tracking number?</a></li>
                    <li><a href="#shipping-when">When will my order ship?</a></li>
            </ul>
            <h4>Customs</h4>
            <ul>
                    <li><a href="#customs-basic">Will I have to pay a customs fee or important tax to claim my items?</a></li>
                    <li><a href="#customs-lying">Will NISEI declare a different value on a customs form so that I will not have to pay a fee?</a></li>
            </ul>

            <h2>Running Events</h2>

            <h4 id="where-to-get">Where can I get the most recent event kits?</h4>
            <p>Check out <a href="/op/available-kits">the Event Kits page</a>!</p>

            <h4 id="scheduling">How do I avoid scheduling my event at the same time as another event? Is there a public listing of all events somewhere?</h4>
            <p>NISEI recommends using https://alwaysberunning.net for scheduling events. If you want to make absolutely sure, just stay in contact with your local meta - especially other event organizers. We are weighing adding event listing functionality to this website in the future.</p>

            <h4 id="entry-fees">Can I collect an entry fee to cover the cost of the kit?</h4>
            <p>Absolutely! Tournament Organizers are already donating their time to organize events; they cannot reasonably be expected to donate their own money too! Feel free to charge a reasonable entry fee to recoup the cost of the event kit(s).</p>

            <h4 id="combining">Can I combine multiple kits, or use one kit for multiple events?</h4>
            <p>That depends on the type of event you're running - for a casual, non-Sanctioned event, you absolutely can! For a Sanctioned Event, you may not, and must follow the specific guidelines for that event.</p>

            <h4 id="sanctioned">Alright, what's a “Sanctioned Event”?</h4>
            <p>A Sanctioned Event is one that is NISEI-approved, subject to more stringent event guidelines to ensure a consistent experience worldwide, and usually part of the normal tournament track. This includes all Store Championships, Regional Championships, National Championships, Continental Championships, and the World Championship. All other events are considered to be non-Sanctioned unless specifically labeled otherwise.</p>

            <h4 id="private">Can I run a private event for friends or coworkers? What about at an 18+, 21+, or other age-restricted venue?</h4>
            <p>You may use a Game Night Kit or other non-Sanctioned event as you see fit. For a Sanctioned Event, such as a Store Championship, the event and venue must be open to the public without age or other restriction.</p>

            <h2>Game Night Kits</h2>

            <h4 id="restrictions">What restrictions are there on how and when I can run my event?</h4>
            <p>For a Game Night Kit, there are no restrictions - you’re the boss. First and foremost, do what the players want - but feel free to try out league nights, alternate formats, achievements, drafts, and more. You don’t even need to run an event with a GNK; you can keep the prizes for yourself if you’re feeling greedy - although we strongly encourage sharing them over a few games.</p>

            <h2>Store Championships</h2>

            <h4 id="sc-event">Do I have to run an event with my Store Championship kit, or can I keep the prizes for myself?</h4>
            <p>You must run an event using your kit or you may find yourself blacklisted from purchasing future non-GNK event kits. If, due to extenuating circumstances, you find yourself unable to run an event, please contact the OP team via projectnisei@gmail.com. Do note that the kit contains 3 extras of each card for the Tournament Organizer to keep!</p>

            <h4 id="sc-prize-distribution">How are the prizes distributed for a Store Championship?</h4>
            <p>Store Championships are considered Sanctioned Events and have a more rigid prize payout structure than a GNK:</p>
            <ul>
                    <li>Highest placing competitor without one: First-round bye at a NISEI Regional Championship Top four: 1x Playmat</li>
                    <li>Top eight: 2x “Elite” card Top 32: 1x “Common” card</li>
            </ul>
            <p>After following this this structure, remaining prizes should be distributed as evenly as possible, at the discretion of the TO.</p>
            <p>These instructions are also included with each kit.</p>

            <h4 id="sc-venue">What are the requirements for a venue? Does a Store Championship have to happen at a game store?</h4>
            <p>No! Anyone can purchase a kit and run a Store Championship, with the understanding that these guidelines are followed. Any venue open to the general public is acceptable.</p>

            <h4 id="sc-format">Can I run a Store Championship in a format other than Standard?</h4>
            <p>Not at this time. All events must follow the NISEI Standard format.</p>

            <h2>Ordering</h2>

            <h4 id="ordering-email">Why didn’t I get a confirmation email?</h4>
            <p>You will get a sales receipt from PayPal; this serves as your confirmation. You will not receive a confirmation email from nisei.net at the time of purchase.</p>

            <h4 id="ordering-cancelling">What if I need to cancel my order?</h4>
            <p>You may cancel an order before it has shipped by emailing us at projectnisei@gmail.com; you will be issued a full refund. Unfortunately NISEI cannot refund an order once it has shipped.</p>

            <h4 id="ordering-deadline">Can I order product after the deadline?</h4>
            <p>Unfortunately not - the cutoff is the cutoff. In the case of GNKs, we need to leave room before the next quarter’s kit goes on sale. For Store Championship and higher event kits, a limited number will have already been put into production.</p>

            <h2>Shipping</h2>

            <h4 id="shipping-incorrect-info">I realized my shipping info on PayPal was incorrect! What do I do?</h4>
            <p>If you discover incorrect shipping information or otherwise need to change it, please email us ASAP at projectnisei@gmail.com.</p>

            <h4 id="shipping-lost">What happens if a postal service loses my package?</h4>
            <p>In the event of a lost or missing package, we will work with the postal service at the point of shipping and in your area to help locate it via a tracking number or customs number. If the package cannot be found, NISEI will do its best to rectify the situation but ultimately cannot be responsible for a package lost by a postal service.</p>

            <h4 id="shipping-tracking">How do I get a tracking number?</h4>
            <p>If a reasonable amount of time has passed, you can email projectnisei@gmail.com with as much info as you can provide and we will reply within 24 hours with a tracking number for you, if one is available. Please do not ask us for tracking within three days of a shipping confirmation.</p>

            <h4 id="shipping-when">When will my order ship?</h4>
            <p>You will always receive a confirmation email when an order ships. For products that do not include a definite shipping date (usually just Game Night Kits), your order will ship as soon as it is assembled. This can take up to five weeks depending on exactly when your order was placed.</p>

            <h2>Customs</h2>

            <h4 id="customs-basic">Will I have to pay a customs fee or important tax to claim my items?</h4>
            <p>If your shipping address is in the European Union, United States, or Australia, you will not need to pay duties or import taxes. If you are outside of these jurisdictions, your country may require you to pay to retrieve your package from customs.</p>

            <h4 id="customs-lying">Will NISEI declare a different value on a customs form so that I will not have to pay a fee?</h4>
            <p>NISEI will fill out all customs forms honestly and completely. Whether or not anything is due is up to your government, not us.</p>
        </div>
    </div>

@stop

