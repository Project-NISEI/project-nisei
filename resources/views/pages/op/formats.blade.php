@extends('layouts.default')

@section('page-title', 'NISEI - Code of Conduct')

@section('content')

    @include('partials.main-title', [
        'heading' => 'Supported Formats'
    ])

    <div class="page-content">
        <div class="container">
          <div class="row">
            <p>Standard is NISEI's flagship format going forward and will include all upcoming changes, including rotation, MWL, and new cards.</p>
            <div class="col-xs-6">
              <h2>Standard Cardpool</h2>
              <p>Legal cardpool from 21st December 2018:</p>
              <ul>
                <li><a href="https://netrunnerdb.com/en/set/cac" target="_blank">Creation and Control (deluxe box)</a></li>
                <li><a href="https://netrunnerdb.com/en/set/hap" target="_blank">Honor and Profit (deluxe box)</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/lunar" target="_blank">Lunar Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/up" target="_blank">Upstalk (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tsb" target="_blank">The Spaces Between (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fc" target="_blank">First Contact (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uao" target="_blank">Up and Over (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/atr" target="_blank">All That Remains (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ts" target="_blank">The Source (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/oc" target="_blank">Order and Chaos (deluxe box)</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/sansan" target="_blank">SanSan Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/val" target="_blank">The Valley (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bb" target="_blank">Breaker Bay (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cc" target="_blank">Chrome City (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uw" target="_blank">The Underway (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/oh" target="_blank">Old Hollywood (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/uot" target="_blank">The Universe of Tomorrow (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/dad" target="_blank">Data and Destiny (deluxe box)</a></li>
                <li><a href="https://netrunnerdb.com/en/cycle/mumbad" target="_blank">Mumbad Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/kg" target="_blank">Kala Ghoda (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bf" target="_blank">Business First (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dag" target="_blank">Democracy and Dogma (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/si" target="_blank">Salsette Island (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/tlm" target="_blank">The Liberated Mind (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ftm" target="_blank">Fear the Masses (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/flashpoint" target="_blank">Flashpoint Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/23s" target="_blank">23 Seconds (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/bm" target="_blank">Blood Money (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/es" target="_blank">Escalation (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/in" target="_blank">Intervention (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ml" target="_blank">Martial Law (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/qu" target="_blank">Quorum (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/red-sand" target="_blank">Red Sand Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/dc" target="_blank">Daedalus Complex (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/so" target="_blank">Station One (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/eas" target="_blank">Earth's Scion (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/baw" target="_blank">Blood and Water (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/fm" target="_blank">Free Mars (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cd" target="_blank">Crimson Dust (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/cycle/kitara" target="_blank">Kitara Cycle</a></li>
                <li class="clear-list">
                  <ul>
                    <li><a href="https://netrunnerdb.com/en/set/ss" target="_blank">Sovereign Sight (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/dtwn" target="_blank">Down the White Nile (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/cotc" target="_blank">Council of the Crest (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/datd" target="_blank">The Devil and the Dragon (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/win" target="_blank">Whispers in Nalubaale (data pack)</a></li>
                    <li><a href="https://netrunnerdb.com/en/set/ka" target="_blank">Kampala Ascendent (data pack)</a></li>
                  </ul>
                </li>
                <li><a href="https://netrunnerdb.com/en/set/rar" target="_blank">Reign and Reverie (deluxe box)</a></li>
                <li><a href="https://netrunnerdb.com/en/set/mo" target="_blank">Magnum Opus Pack</a></li>
                <li><a href="https://drive.google.com/file/d/1ECIihkYO9xvQfnsVUQicsY_SWpnys3ji/view?usp=sharing" target="_blank">System Core 2019</a></li>
              </ul>
            </div>

            <div class="col-xs-6">
              <h2>Standard MWL</h2>
                <h3>Corp - removed</h3>
                <ul>
                  <li>24/7 News Cycle</li>
                  <li>Bryan Stinson</li>
                  <li>Cerebral Imaging</li>
                  <li>Clone Sufferage Movement</li>
                  <li>Friends in High Places</li>
                  <li>Hired Help</li>
                  <li>Museum of History</li>
                  <li>Sensie Actors Union</li>
                </ul>
                <h3>Corp - restricted (limit 1 of the below per deck)</h3>
                <ul>
                  <li>Bio-Ethics Association</li>
                  <li>Commercial Bankers Group</li>
                  <li>Excalibur</li>
                  <li>Global Food Initiative</li>
                  <li>Jinteki: Potential Unleashed</li>
                  <li>Mother Godess</li>
                  <li>Mti Mwekundu: Life Improved</li>
                  <li>Mumba Temple</li>
                  <li>Mumbad City Hall</li>
                  <li>Obokata Protocol</li>
                  <li>Surveyor</li>
                  <li>Violet Level Clearance</li>
                  <li>Whampoa Reclamation</li>
                </ul>
                <h3>Runner - removed</h3>
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
                  <li>Watch the World Burn</li>
                  <li>Zer0</li>
                </ul>
                <h3>Runner - restricted (limit 1 playset of the below per deck)</h3>
                <ul>
                  <li>Aesop's Pawnshop</li>
                  <li>Employee Strike</li>
                  <li>Film Critic</li>
                  <li>Gang Sign</li>
                  <li>Inversificator</li>
                  <li>Levy AR Lab Access</li>
                  <li>Mad Dash</li>
                  <li>Paperclip</li>
                  <li>Rumor Mill</li>
                </ul>
            </div>
            <div class="row">
              <p>Coming soon: information on Eternal, Snapshot, and other formats.</p>
            </div>
          </div>
        </div>
    </div>

@stop
