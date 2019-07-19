@extends('layouts.default')

@section('page-title', 'NISEI - Supported Formats')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Supported Formats'
    ])

    <div class="page-content">
        <div class="container">
          <div class="row">
            <p> All formats follow the rules of play and errata outlined in the latest NISEI Comprehensive Rules. New releases become legal at Casual events immediately and at Competitive events on the second Friday after their release. For example, if a new set were released on Monday the 1st of a given month, it would become legal on Friday the 12th. Rotation and new MWL releases will be given their own effective dates, announced at the same time and always found in the Organised Play Policy document.</p>
            <p>Cards in the “removed” section may not be included in decks, used as identities, or chosen as extra cards (such as directives). Only a single card from the “restricted” section may be included in a deck up to its maximum number of copies, used as an identity, or chosen as an extra card.</p>
          </div>
          <div class="row">
            <h2>Standard</h2>
            <p>The flagship format of NISEI Organized Play, Standard is frequently changing to keep the meta exciting and engaging for players of all levels. Most official Organised Play events will follow the Standard format; if a format is not specified, assume Standard but contact your Tournament Organiser for clarity.</p>
            <div class="col-6">
              <h3>Legal Products</h3>
              <p>Legal cardpool from 21st December 2018:</p>
              <ul>
                <li><a href="https://netrunnerdb.com/en/set/cac" target="_blank">Creation and Control</a></li>
                <li><a href="https://netrunnerdb.com/en/set/hap" target="_blank">Honor and Profit</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/lunar" target="_blank">Lunar Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/up" target="_blank">Upstalk</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tsb" target="_blank">The Spaces Between</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fc" target="_blank">First Contact</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uao" target="_blank">Up and Over</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/atr" target="_blank">All That Remains</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ts" target="_blank">The Source</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/oc" target="_blank">Order and Chaos</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/sansan" target="_blank">SanSan Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/val" target="_blank">The Valley</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bb" target="_blank">Breaker Bay</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cc" target="_blank">Chrome City</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uw" target="_blank">The Underway</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/oh" target="_blank">Old Hollywood</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uot" target="_blank">The Universe of Tomorrow</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/dad" target="_blank">Data and Destiny</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/mumbad" target="_blank">Mumbad Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/kg" target="_blank">Kala Ghoda</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bf" target="_blank">Business First</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dag" target="_blank">Democracy and Dogma</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/si" target="_blank">Salsette Island</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tlm" target="_blank">The Liberated Mind</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ftm" target="_blank">Fear the Masses</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/flashpoint" target="_blank">Flashpoint Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/23s" target="_blank">23 Seconds</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bm" target="_blank">Blood Money</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/es" target="_blank">Escalation</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/in" target="_blank">Intervention</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ml" target="_blank">Martial Law</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/qu" target="_blank">Quorum</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/red-sand" target="_blank">Red Sand Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/dc" target="_blank">Daedalus Complex</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/so" target="_blank">Station One</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/eas" target="_blank">Earth's Scion</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/baw" target="_blank">Blood and Water</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fm" target="_blank">Free Mars</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cd" target="_blank">Crimson Dust</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/kitara" target="_blank">Kitara Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/ss" target="_blank">Sovereign Sight</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dtwn" target="_blank">Down the White Nile</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cotc" target="_blank">Council of the Crest</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/datd" target="_blank">The Devil and the Dragon</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/win" target="_blank">Whispers in Nalubaale</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ka" target="_blank">Kampala Ascendent</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/rar" target="_blank">Reign and Reverie</a></li>
                <li><a href="https://netrunnerdb.com/en/set/mo" target="_blank">Magnum Opus Set</a></li>
                <li><a href="https://netrunnerdb.com/en/set/sc19" target="_blank">System Core 2019</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/ashes" target="_blank">Ashes Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/df" target="_blank">Downfall</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="col-6">
              <h3>MWL 3.3</h3>
                <p class="font-italic">Effective from Friday 19th July 2019.
                </br>Changes from MWL 3.2 detailed <a href="http://nisei.net/article/MWL33">here</a>.</p>
                <h4>Corp - removed</h4>
                <ul>
                  <li>24/7 News Cycle</li>
                  <li>Bryan Stinson</li>
                  <li>Cerebral Imaging: Infinite Frontiers</li>
                  <li>Clone Suffrage Movement</li>
                  <li>Friends in High Places</li>
                  <li>Hired Help</li>
                  <li>Jinteki: Potential Unleashed</li>
                  <li>Mti Mwekundu: Life Improved</li>
                  <li>Mumbad City Hall</li>
                  <li>Museum of History</li>
                  <li>Sensie Actors Union</li>
                </ul>
                <h4>Corp - restricted</h4>
                <ul>
                  <li>Bio-Ethics Association</li>
                  <li>Global Food Initiative</li>
                  <li>Mother Goddess</li>
                  <li>Mumba Temple</li>
                  <li>Obokata Protocol</li>
                  <li>SIU</li>
                  <li>Whampoa Reclamation</li>
                  <li>Zealous Judge</li>
                </ul>
                <h4>Runner - removed</h4>
                <ul>
                  <li>Aaron Marrón</li>
                  <li>Bloo Moose</li>
                  <li>Crowdfunding</li>
                  <li>Employee Strike</li>
                  <li>Faust</li>
                  <li>GPI Net Tap</li>
                  <li>Hyperdriver</li>
                  <li>Mars for Martians</li>
                  <li>Salvaged Vanadis Armory</li>
                  <li>Şifr</li>
                  <li>Tapwrm</li>
                  <li>Temüjin Contract</li>
                  <li>Watch the World Burn</li>
                  <li>Zer0</li>
                </ul>
                <h4>Runner - restricted</h4>
                <ul>
                  <li>Aesop's Pawnshop</li>
                  <li>Au Revoir</li>
                  <li>Corporate "Grant"</li>
                  <li>Dorm Computer</li>
                  <li>Film Critic</li>
                  <li>Gang Sign</li>
                  <li>Inversificator</li>
                  <li>Laamb</li>
                  <li>Labor Rights</li>
                  <li>Levy AR Lab Access</li>
                  <li>Mad Dash</li>
                  <li>Paperclip</li>
                  <li>Power Tap</li>
                  <li>Rumor Mill</li>
                  <li>Tech Trader</li>
                </ul>
            </div>
          </div>
          <div class="row">
            <h2>Snapshot</h2>
            <p>This format is a "snapshot" of the meta at Magnum Opus; the culmination of FFG Organized Play. It will see minimal changes unless strictly necessary.</p>
            <div class="col-6">
              <h3>Legal Products</h3>
              <p>Legal cardpool from 16th November 2018:</p>
              <ul>
                <li><a href="https://netrunnerdb.com/en/set/cac" target="_blank">Creation and Control</a></li>
                <li><a href="https://netrunnerdb.com/en/set/hap" target="_blank">Honor and Profit</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/lunar" target="_blank">Lunar Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/up" target="_blank">Upstalk</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tsb" target="_blank">The Spaces Between</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fc" target="_blank">First Contact</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uao" target="_blank">Up and Over</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/atr" target="_blank">All That Remains</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ts" target="_blank">The Source</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/oc" target="_blank">Order and Chaos</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/sansan" target="_blank">SanSan Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/val" target="_blank">The Valley</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bb" target="_blank">Breaker Bay</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cc" target="_blank">Chrome City</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uw" target="_blank">The Underway</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/oh" target="_blank">Old Hollywood</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uot" target="_blank">The Universe of Tomorrow</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/dad" target="_blank">Data and Destiny</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/mumbad" target="_blank">Mumbad Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/kg" target="_blank">Kala Ghoda</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bf" target="_blank">Business First</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dag" target="_blank">Democracy and Dogma</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/si" target="_blank">Salsette Island</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tlm" target="_blank">The Liberated Mind</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ftm" target="_blank">Fear the Masses</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/flashpoint" target="_blank">Flashpoint Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/23s" target="_blank">23 Seconds</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bm" target="_blank">Blood Money</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/es" target="_blank">Escalation</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/in" target="_blank">Intervention</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ml" target="_blank">Martial Law</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/qu" target="_blank">Quorum</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/red-sand" target="_blank">Red Sand Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/dc" target="_blank">Daedalus Complex</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/so" target="_blank">Station One</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/eas" target="_blank">Earth's Scion</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/baw" target="_blank">Blood and Water</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fm" target="_blank">Free Mars</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cd" target="_blank">Crimson Dust</a></li>
                  </ul>
                </li>
		<li><a href="https://netrunnerdb.com/en/set/td" target="_blank">Terminal Directive</a></li>
		<li><a href="https://netrunnerdb.com/en/set/core2" target="_blank">Revised Core Set</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/kitara" target="_blank">Kitara Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/ss" target="_blank">Sovereign Sight</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dtwn" target="_blank">Down the White Nile</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cotc" target="_blank">Council of the Crest</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/datd" target="_blank">The Devil and the Dragon</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/win" target="_blank">Whispers in Nalubaale</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ka" target="_blank">Kampala Ascendent</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/rar" target="_blank">Reign and Reverie</a></li>
              </ul>
            </div>

            <div class="col-6">
              <h3>Snapshot MWL 1.0</h3>
                <h4>Corp - removed</h4>
                <ul>
                  <li>24/7 News Cycle</li>
                  <li>Cerebral Imaging: Infinite Frontiers</li>
                  <li>Clone Suffrage Movement</li>
                  <li>Estelle Moon</li>
                  <li>Friends in High Places</li>
                  <li>Museum of History</li>
                  <li>Sensie Actors Union</li>
                </ul>
                <h4>Corp - restricted</h4>
                <ul>
                  <li>Bio-Ethics Association</li>
                  <li>Brain Rewiring</li>
                  <li>Bryan Stinson</li>
                  <li>Global Food Initiative</li>
                  <li>Hunter Seeker</li>
                  <li>Jinteki: Potential Unleashed</li>
                  <li>Mother Goddess</li>
                  <li>Mumba Temple</li>
                  <li>Mumbad City Hall</li>
                  <li>Obokata Protocol</li>
                  <li>Skorpios Defense Systems: Persuasive Power</li>
                  <li>Surveyor</li>
                  <li>Violet Level Clearance</li>
                  <li>Whampoa Reclamation</li>
                </ul>
                <h4>Runner - removed</h4>
                <ul>
                  <li>Aaron Marrón</li>
                  <li>Bloo Moose</li>
                  <li>Faust</li>
                  <li>Hyperdriver</li>
                  <li>Mars for Martians</li>
                  <li>Salvaged Vanadis Armory</li>
                  <li>Şifr</li>
                  <li>Tapwrm</li>
                  <li>Temüjin Contract</li>
                  <li>Zer0</li>
                </ul>
                <h4>Runner - restricted</h4>
                <ul>
                  <li>Aesop's Pawnshop</li>
                  <li>Employee Strike</li>
                  <li>Film Critic</li>
                  <li>Gang Sign</li>
                  <li>Inversificator</li>
                  <li>Levy AR Lab Access</li>
                  <li>Mad Dash</li>
                  <li>Magnum Opus</li>
                </ul>
            </div>
          </div>
          <div class="row">
            <h2>Eternal</h2>
            <p>Eternal is not affected by rotation and has a much less stringent Most Wanted List. The largest and most complex format, it encompasses nearly the entirety of the printed card pool and only grows larger with time.</p>
            <div class="col-6">
              <h3>Legal Products</h3>
              <p>Legal cardpool from 16th November 2018:</p>
              <ul>
                <li><a href="https://netrunnerdb.com/en/set/core" target="_blank">Original Core Set</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/genesis" target="_blank">Genesis Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/wla" target="_blank">What Lies Ahead</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ta" target="_blank">Trace Amount</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ce" target="_blank">Cyber Exodus</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/asis" target="_blank">A Study in Static</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/hs" target="_blank">Humanity's Shadow</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fp" target="_blank">Future Proof</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/cac" target="_blank">Creation and Control</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/spin" target="_blank">Spin Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/om" target="_blank">Opening Moves</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/st" target="_blank">Second Thoughts</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/mt" target="_blank">Mala Tempora</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tc" target="_blank">True Colors</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fal" target="_blank">Fear and Loathing</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dt" target="_blank">Double Time</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/hap" target="_blank">Honor and Profit</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/lunar" target="_blank">Lunar Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/up" target="_blank">Upstalk</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tsb" target="_blank">The Spaces Between</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fc" target="_blank">First Contact</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uao" target="_blank">Up and Over</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/atr" target="_blank">All That Remains</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ts" target="_blank">The Source</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/oc" target="_blank">Order and Chaos</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/sansan" target="_blank">SanSan Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/val" target="_blank">The Valley</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bb" target="_blank">Breaker Bay</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cc" target="_blank">Chrome City</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uw" target="_blank">The Underway</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/oh" target="_blank">Old Hollywood</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uot" target="_blank">The Universe of Tomorrow</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/dad" target="_blank">Data and Destiny</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/mumbad" target="_blank">Mumbad Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/kg" target="_blank">Kala Ghoda</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bf" target="_blank">Business First</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dag" target="_blank">Democracy and Dogma</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/si" target="_blank">Salsette Island</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tlm" target="_blank">The Liberated Mind</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ftm" target="_blank">Fear the Masses</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/flashpoint" target="_blank">Flashpoint Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/23s" target="_blank">23 Seconds</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bm" target="_blank">Blood Money</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/es" target="_blank">Escalation</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/in" target="_blank">Intervention</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ml" target="_blank">Martial Law</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/qu" target="_blank">Quorum</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/red-sand" target="_blank">Red Sand Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/dc" target="_blank">Daedalus Complex</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/so" target="_blank">Station One</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/eas" target="_blank">Earth's Scion</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/baw" target="_blank">Blood and Water</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fm" target="_blank">Free Mars</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cd" target="_blank">Crimson Dust</a></li>
                  </ul>
                </li>
		<li><a href="https://netrunnerdb.com/en/set/td" target="_blank">Terminal Directive</a></li>
		<li><a href="https://netrunnerdb.com/en/set/core2" target="_blank">Revised Core Set</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/kitara" target="_blank">Kitara Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/ss" target="_blank">Sovereign Sight</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dtwn" target="_blank">Down the White Nile</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cotc" target="_blank">Council of the Crest</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/datd" target="_blank">The Devil and the Dragon</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/win" target="_blank">Whispers in Nalubaale</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ka" target="_blank">Kampala Ascendent</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/rar" target="_blank">Reign and Reverie</a></li>
                <li><a href="https://netrunnerdb.com/en/set/mo" target="_blank">Magnum Opus Set</a></li>
                <li><a href="https://netrunnerdb.com/en/set/sc19" target="_blank">System Core 2019</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/ashes" target="_blank">Ashes Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/df" target="_blank">Downfall</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="col-6">
              <h3>MWL 1.2</h3>
              <p class="font-italic">Effective from Friday 10th May 2019.
              </br>Changes from MWL 1.1 detailed <a href="http://nisei.net/article/MWL32">here</a>.</p>
                <h4>Corp - removed</h4>
                <ul>
                  <li>24/7 News Cycle</li>
                  <li>Friends in High Places</li>
                  <li>Hired Help</li>
                </ul>
                <h4>Runner - removed</h4>
                <ul>
                  <li>Aaron Marrón</li>
                  <li>Bloo Moose</li>
                  <li>Faust</li>
                  <li>Rumor Mill</li>
                  <li>Salvaged Vanadis Armory</li>
                  <li>Şifr</li>
                  <li>Temüjin Contract</li>
                  <li>Watch the World Burn</li>
                </ul>
            </div>
          </div>
          <div>
            <h2>Other Formats</h2>
            <p>There are a number of other formats that will see support that do not necessarily require an MWL of their own. Keep an eye on Nisei.net for updates as these formats are rolled out!</p>
            <h3>Core Experience</h3>
            <p>The “core” of the game experience, and an excellent starting point for new or returning players. A single copy of <a href="http://nisei.net/article/SC2019">System Core 2019</a> is the only legal product; there is no MWL.</p>
            <h3>Draft</h3>
            <p>The draft rules are currently in the process of being reworked and creation of a NISEI cube is in progress.</p>
            <h3>NAPD 3v1</h3>
            <p>A particularly unique format, this format’s rules are currently being explored and an MWL is being developed in order to provide a fun and fair experience for four players.</p>
          </div>
        </div>
    </div>

@stop

