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
                    <br>
                    <p>* Indicates a required field</p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    {{ Form::open(array('url' => 'foo/bar', 'class' => 'form')) }}
                        {{ csrf_field() }}
                        {{ Form::hidden('type_of_kit', $event->name, array('required' => 'true')) }}
                        <div class="form-field col-sm-12">
                            {{ Form::label('to_name', 'TO Name *') }}
                            {{ Form::text('to_name', null, array('required' => 'true')) }}
                        </div>
                        <div class="form-field col-sm-12">
                            {{ Form::label('to_email', 'TO Email *') }}
                            {{ Form::email('to_email', null, array('required' => 'true')) }}
                        </div>
                        <div class="form-field col-sm-12">
                            {{ Form::label('to_slack_handle', 'TO slack handle') }}
                            <span class="form-field__meta">(if the TO is active on Stimhack slack)</span>
                            {{ Form::text('to_slack_handle', null) }}
                        </div>
                        @if ($event->type == 'GNK')
                            <div class="form-field col-sm-12">
                                {{ Form::label('number_of_kits', 'Number of kits *') }}
                                {{ Form::number('number_of_kits', 1, array('required' => 'true')) }}
                            </div>
                        @endif
                        <div class="form-field col-sm-12">
                            {{ Form::label('shipping_address', 'Shipping Address *') }}
                            {{ Form::textarea('shipping_address', null, array('required' => 'true', 'rows' => '5')) }}
                        </div>
                        <div class="form-field col-sm-12">
                            <input type="submit" value="Submit">
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop