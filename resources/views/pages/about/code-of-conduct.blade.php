@extends('layouts.default')

@section('page-title', 'NISEI - Code of Conduct')

@section('content')

    @include('partials.main-title', [
        'heading' => 'NISEI Code of Conduct'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-7">
                    <p>This policy is a "living" document, and subject to refinement and expansion in the future. <b>Last updated October 2018.”</b></p>
                    <h2>Scope</h2>
                    <p>This Code of Conduct applies both within community spaces and in other spaces involving the community. These include the Project NISEI Slack & Stimhack.com, its Twitter community, private email communications in the context of the community, and any events where members of the community are participating, as well as adjacent communities and venues affecting the community’s members.</p>
                    <p>Depending on the violation, the admins may decide that violations of this Code of Conduct beyond the scope of the community may deem an individual unwelcome, and admins reserve the right to take appropriate action to maintain the comfort and safety of its members.</p>
                </div>
                <div class="col-sm-12 col-lg-5">
                    <img class="page-content__image" src="/assets/images/revised-core.png" alt="Android: Netrunner Revised Core Set">
                </div>
            </div>
        </div>
    </div>
@stop