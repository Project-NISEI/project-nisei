@extends('layouts.default')

@section('page-title', 'NISEI - ' . $event->name)

@section('content')

    @include('partials.main-title', [
        'heading' => $event->name
    ])

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {!! $event->content !!}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="headline"><span>Purchase a tournament kit</span></h4>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div>
                    <p>Purchase successful! We'll be in touch to help you organise your event asap.</p>
                </div>
                <?php Session::forget('success');?>
            @else
                @if ($message = Session::get('error'))
                    <div>
                        <p>Whoops, something went wrong checking out via paypal. If this continues to go wrong, or if you think you've been debited and are seeing this error incorrectly please get in touch and we'll sort it out.</p>
                    </div>
                    <?php Session::forget('error');?>
                @endif

                <div class="row">
                    {{ Form::open(array('url' => 'paypal', 'class' => 'form')) }}
                        {{ csrf_field() }}
                        {{ Form::hidden('kit_name', $event->name, array('required' => 'true')) }}
                        {{ Form::hidden('kit_slug', $event->slug, array('required' => 'true')) }}<!--
                        @if ($event->type == 'GNK')
                            --><div class="form-field" style="display: inline-block; vertical-align: bottom; width: 15rem;">
                                {{ Form::label('number_of_kits', 'Number of kits *') }}
                                {{ Form::number('number_of_kits', 1, array('required' => 'true')) }}
                            </div><!--
                        @endif
                        --><div class="form-field" style="display: inline-block; vertical-align: bottom; width: 8rem;">
                            <input type="submit" value="Purchase">
                        </div>
                    {{ Form::close() }}
                </div>
            @endif

        </div>
    </div>
@stop