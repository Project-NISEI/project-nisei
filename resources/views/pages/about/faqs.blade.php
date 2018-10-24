@extends('layouts.default')

@section('page-title', 'NISEI - FAQs?')

@section('content')

    @include('partials.main-title', [
        'heading' => 'FAQs?'
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="accordion col-sm-12" id="faqAccordion">
                    @foreach ($faqs as $index=>$faq)
                        <div class="card">
                            <div class="card-header" id="heading{{ $index }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h5>
                             </div>

                            <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : 'collapsed'}}" aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                                <div class="card-body">{!! $faq->answer !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop