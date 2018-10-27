@extends('layouts.default')

@section('page-title', 'NISEI - Code of Conduct')

@section('content')

    @include('partials.main-title', [
        'heading' => 'NISEI Code of Conduct'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div>
                    <p>This policy is a "living" document, and subject to refinement and expansion in the future. <b>Last updated October 2018.</b></p>
                    <hr />
                    <h2>Scope</h2>
                    <p>This Code of Conduct applies both within community spaces and in other spaces involving the community. These include the Project NISEI Slack & Stimhack.com, its Twitter community, private email communications in the context of the community, and any events where members of the community are participating, as well as adjacent communities and venues affecting the community’s members.</p>
                    <p>Depending on the violation, the admins may decide that violations of this Code of Conduct beyond the scope of the community may deem an individual unwelcome, and admins reserve the right to take appropriate action to maintain the comfort and safety of its members.</p>
                    <hr />
                    <h2>Our Pledge</h2>
                    <p>Project NISEl is dedicated to providing a harassment-free experience for everyone, regardless of belief, body size, disability (learning, mental, physical or any other kind), gender identity and expression, health conditions (mental or physical), physical appearance, race, religion or sexual orientation.  We do not tolerate harassment of participants in any form.</p>
                    <hr />
                    <h2>Our Standards</h2>
                    <p>Examples of behaviour that helps to create a positive environment include:</p>
                      <ul>
                        <li>Using welcoming and inclusive language.</li>
                        <li>Being respectful of differing viewpoints and experiences.</li>
                        <li>Gracefully accepting constructive feedback.</li>
                        <li>Focusing on what is best for the community.</li>
                        <li>Showing empathy and kindness towards other community members.</li>
                      </ul>
                    <p>Examples of unacceptable behaviour by participants include, but are not limited to, the following:</p>
                      <ul>
                        <li>The use of sexualized language or imagery and unwelcome sexual attention or advances, including when simulated online. The only exception to sexual topics is channels/spaces specifically for topics of sexual identity.</li>
                        <li>Trolling, insulting/derogatory comments, casual use of slurs or similar pejorative language, and personal or political attacks.</li>
                        <li>Making light of/making mocking comments about trigger warnings and content warnings.</li>
                        <li>Attacking someone’s use of cards/playstyles/strategies.</li>
                        <li>Public or private harassment, deliberate intimidation, or threats.</li>
                        <li>Physical contact without consent.</li>
                        <li>Publishing others’ private information, such as a physical or electronic address, without explicit permission. This includes any sort of “outing” of any aspect of someone’s identity without their explicit consent.</li>
                        <li>Publishing screenshots or quotes, especially from private channels, without all quoted users’ explicit consent.</li>
                        <li>Unsolicited explanations under the assumption that someone doesn’t already know it. Ask before you teach! Don’t assume what people’s knowledge gaps are. For example, someone is browsing sleeves. Don’t go up to them and tell them everything you know about sleeves. If someone needs to know the difference between Ultra Pro and Dragon Shield, they will ask.</li>
                        <li>Deliberately using incorrect pronouns for a person, especially after being informed of the correct ones. If you’re unsure, use gender-neutral language.</li>
                        <li>Other conduct which could reasonably be considered inappropriate in a professional or community setting.</li>
                        <li>Any attempt to present “reverse-ism” versions of the above as violations. Examples of reverse-isms are “reverse racism”, “reverse sexism”, “heterophobia”, and “cisphobia”. For example, if someone holds an event for women and non-binary players, we will not tolerate people saying it is unfair due to “reverse sexism”/”sexist to men/cis people”.</li>
                        <li>Any of the above even when presented as <a href="https://en.wikipedia.org/wiki/Hipster_racism" target="blank">“ironic” or “joking”</a>.</li>
                      </ul>
                    <p>Players are attracted to Android: Netrunner for a number of different, often personal, reasons and therefore have different goals for the game and ways of working towards those goals. While some players will prefer a highly competitive style, others are interested primarily in the flavour and narrative of the Android universe. Likewise, players will be of a variety of skill levels, and so may have different interests or needs from the more seasoned players. Please respect all interests and play levels. Do not discourage or insult players who ask what may appear to you to be an obvious question. Do not dismiss or demean players who are more interested in the game's mechanics than its theming. All modes of engaging with Android: Netrunner are valid and should be respected.</p>
                    <hr />
                    <h2>If Something Happens</h2>
                    <p>If you see a Code of Conduct violation, follow these steps:</p>
                      <ol>
                        <li>If you can and feel safe doing so, let the person know that what they did is not appropriate and ask them to stop and/or edit their message(s).</li>
                        <li>That person should immediately stop the behaviour and correct the issue.</li>
                        <li>If this doesn’t happen, or if you’re uncomfortable speaking up, contact admins.</li>
                        <li>As soon as available, an admin will join, identify themselves, and take further action, starting with a warning, then temporary deactivation, then long-term deactivation.</li>
                     </ol>
                    <p>When reporting, please include any relevant details, links, screenshots, context, or other information that may be used to better understand and resolve the situation.</p>
                    <p><strong>The Admin team will prioritize the well-being and comfort of the recipients of the violation over the comfort of the violator.</strong></p>
                    <hr />
                    <h2>Admin Enforcement Process</h2>
                    <p>Once the admins get involved, they will follow a documented series of steps and do their best to preserve the well-being of community members. This section covers actual concrete steps.</p>
                    <h3>Contacting Admins</h3>
                    <p>If you need to talk to an admin, you can contact the NISEI admin team through any of the following methods:</p>
                      <ul>
                        <li>Directly message any admin in private (through either Twitter, Slack, or email, as available) </li>
                        <li>Email the admins directly at projectnisei@gmail.com</li>
                        <li>Direct Message @ProjectNISEI  on Twitter with the details and any relevant links.</li>
                        <li>On Stimhack Slack, Admins are @dodgepong and @tolaasin</li>
                      </ul>
                    <h3>Further Enforcement</h3>
                    <p>If you’ve already followed the initial enforcement steps, these are the steps admins will take for further enforcement, as needed:</p>
                      <ol>
                        <li>Repeat the request to stop</li>
                        <li>If the person refuses to stop, they will be removed from the channel and given an official warning.</li>
                        <li>If the behaviour continues or is repeated later, the person will be deactivated for 24 hours.</li>
                        <li>If the behaviour continues or is repeated after the temporary deactivation, a long-term deactivation will be used for a period of time relative to the offence.</li>
                        <li>On top of this, admins may remove any offending messages, images, contributions, etc, as they deem necessary.</li>
                        <li>Admins might extend this removal from all community areas including events and tournaments.</li>
                      </ol>
                    <p>Admins reserve full rights to skip any of these steps, at their discretion, if the violation is considered to be a serious and/or immediate threat to the health and well-being of members of the community. These include any threats, serious physical or verbal attacks, and other such behaviours that would be completely unacceptable in any social setting that puts our members at risk.</p>
                    <p>Members expelled from events or venues with any sort of paid attendance will not be refunded.</p>
                    <hr />
                    <h2>Who Watches the Watchers?</h2>
                    <p>Admins and other leaders who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the community’s leadership. These may include anything from removal from the admin team to a permanent ban from the community.</p>
                    <p>If a NISEI team member, admin, moderator, tournament organiser, or any other representative of the organisation, is in contravention of this document or you believe they have engaged in any other unacceptable behaviour, please report them directly to a NISEI board member. List of board members and their contact information can be found on the NISEI website. An anonymous report can also be submitted here on the NISEI website. (coming shortly)</p>
                    <p>If a board member is in contravention of this document or you believe they have engaged in any other unacceptable behaviour, please report the incident directly to the president and/or the Equality, Diversity, and Inclusion Team Lead.</p>
                    <hr />
                    <h2>Enforcement Examples</h2>
                    <h3>The Best Case</h3>
                    <p>The vast majority of situations work out like this, in our experience. This interaction is common and generally positive. ‘Alex’s’ use of the word ‘crazy’ could be upsetting to someone with mental health issues, ‘Patt’ calls them on it, ‘Alex’ responds well to the request.</p>
                    <div class="coc-quote">
                    <p>Alex: “Yeah I used X and it was really crazy!”</p>
                    <p>Patt: “Hey, could you not use that word? What about ‘ridiculous’ instead?”</p>
                    <p>Alex: “oh sorry, sure.” -> edits old message to say “it was really confusing!”</p>
                    </div>
                    <h3>The Admin Case</h3>
                    <p>Sometimes, though, you need to get admins involved. Admins will do their best to resolve conflicts, but people who were harmed by something will take priority.</p>
                    <div class="coc-quote">
                    <p>Patt: “Honestly, sometimes I just really hate playing against $card and anyone who uses it probably sucks at Netrunner and is an idiot.”</p>
	                  <p>Alex: “Whoa there, could you dial it back a bit? There’s a CoC thing about attacking folks’ card  choice like that.”</p>
                    <p>Patt: “I’m not attacking anyone, are you deaf?”</p>
                    <p>Alex: -> messages an admin “hey uh. Can someone look at #channel? Patt is getting a bit aggro. I tried to nudge them about it, but nope.”</p>
                    <p>MxAdmin1: /joins #channel/ “Hey Patt, admin here. Could you tone it down? This sort of attack is really not okay in this space.”</p>
                    <p>Patt: “Leave me alone I haven’t said anything bad wtf is wrong with you.”</p>
	                  <p>MxAdmin1: “/remove @patt”, “/msg @patt I mean it. Please refer to the CoC over at COCURL if you have questions, but you can consider this an actual warning. I’d appreciate it if you reworded your messages in #channel, since they made folks there uncomfortable. Let’s try and be kind, yeah?”</p>
	                  <p>Patt: “/msg @mxadmin1 Okay sorry. I’m just frustrated and I’m kinda burnt out and I guess I got carried away. I’ll DM Alex a note apologizing and edit my messages. Sorry for the trouble.”</p>
                    <p>MxAdmin1: “/msg @patt Thanks for that. I hear you on the stress. Burnout sucks :/. Have a good one!”</p>
                    </div>
                    <h3>The Accelerated Admin Action Case AKA The NOPE Case</h3>
                    <div class="coc-quote">
                    <p>	KKKFan: “Hi, I am a literal actual nazi and I think white supremacists are quite fashionable.”</p>
                    <p>Patt: “NOOOOPE. OH NOPE NOPE.”</p>
                    <p>Alex: “WHOAH NO. NOPE.” ->  messages an admin “nope nope nope @ #channel”</p>
                    <p>MxAdmin1: “👀 Nope. NOPE NOPE NOPE. 🔥”</p>
                    <p>KKKFan has been deactivted</p>
                    </div>
                    <hr />
                    <h2>Code of Conduct Enforcement Policy</h2>
                    <p>No matter how kind or nice people think they are, at some point, someone’s gonna say Something Bad:TM: and things are going to go awry. This document is meant as a write-up and guideline holding core values about what this community considers the best approach to resolving these conflicts in a kind and positive way, as much as possible. It is paired with the community’s Code of Conduct, which includes the concrete enforcement steps.</p>
                    <h3>Guiding Principles</h3>
                      <ul>
                        <li><strong>The Safety of the hurt takes priority over the Comfort of the ones causing harm.</strong></li>
                        <li><strong>Be Kind:</strong> This is not necessarily the same as being nice. There is a justice involved in being kind. It involves genuine consideration for the situation and understanding one’s own, and others’, roles both in this community and in the larger society. It involves empathy and education.</li>
                        <li><strong>The amygdala (“lizard brain”) makes conflict resolution hard:</strong> When a conflict starts, people often enter fight-or-flight mode, which reduces their ability to look at what’s in front of them with a kind lens, and reduces the context they’re able to reach for in order to understand what’s actually going on. Continuing the argument at this point is not likely to resolve the situation and may escalate things further. Sometimes it is best to step away and take a breather, both for your own and other’s benefit.</li>
                        <li><strong>Inaction is Oppression:</strong> Taking too long to take action when someone is hurt by default benefits the person who did harm. While it’s important to be kind and to understand the situation, things must be handled in a timely manner, and at least some measures must be taken right away to prevent those who were harmed from being the ones who are actually punished.</li>
                        <li><strong>Nobody’s Perfect:</strong> Mistakes happen. Not everyone has had a wide enough range of cultural and personal experience to understand what is seen as unkind or outright hurtful by folks they may not have had access to. This means that it’s important to prioritize education, and conflict resolution processes that focus on improving and moving forward, instead of making examples of people.</li>
                        <li><strong>Intersectionality is Important:</strong> The way we relate to each other, especially in greatly diverse communities, is often complex and complicated. This means that often, conflicts between people who belong to different intersections require care and consideration in handling, and being informed about those complex relationships.</li>
                        <li><strong>Trust the Ouch:</strong> It’s more likely that if someone says they’re hurt, they really are hurt, and you should listen and trust them on it, even (and especially) if you don’t understand why or how.</li>
                        <li><strong>Education is Emotional Labor:</strong> The person who was hurt does not owe you an explanation or a 101. It’s ok to expect people to do their own thinking and research when told there was a wrong, and to correct the behaviour, instead of placing an undue burden on someone who’s already been hurt or who is already frustrated with the situation.</li>
                        <li><strong>Support is something we can promise – not Safety:</strong> We don’t believe safety, as a general thing, is something we can reasonably promise members of a community. Harm comes suddenly, often unexpectedly. Instead, we believe it’s a more worthwhile endeavour to try and prevent harm from happening through education, documentation, and policy, and build trust with the community that when something happens, they won’t have to fight tooth and nail for even basic fairness.</li>
                      </ul>
                    <hr />
                    <h2>Attribution</h3>
                    <p><a href="https://wealljs.org/code-of-conduct" target="blank">WeAllJS Code of Conduct</a> and <a href="https://wealljs.org/enforcement" target="blank"> Enforcement Guidelines</a></p>
                    <p><a href="https://docs.google.com/document/d/1R661s6N1MfI3idqXMPGHkTLFGmwvI1iSpt5mW4b80BI/edit#heading=h.7hm64w5cy57e" target="blank">Stimhack Slack #uk channel Code of Conduct</a></p>
                    <p><a href="https://geekfeminism.org/about/code-of-conduct/" target="blank">Geek Feminism Code of Conduct</a></p>/
                </div>
            </div>
        </div>
    </div>
@stop