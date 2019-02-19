@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tournaments.title')</h3>
    {!! Form::model($tournament, ['method' => 'PUT', 'files' => false, 'route' => ['admin.tournaments.update', $tournament->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tournament_set_id', trans('quickadmin.tournaments.fields.tournamentset'), ['class' => 'control-label']) !!}
                    {!! Form::select('tournament_set_id', $tournamentsets, old('tournament_set_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tournament_set_id'))
                        <p class="help-block">
                            {{ $errors->first('tournament_set_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('region', trans('quickadmin.tournaments.fields.region').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('region', $enum_region, old('region'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('region'))
                        <p class="help-block">
                            {{ $errors->first('region') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subregion', trans('quickadmin.tournaments.fields.subregion').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('subregion', old('subregion'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subregion'))
                        <p class="help-block">
                            {{ $errors->first('subregion') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', trans('quickadmin.tournaments.fields.date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'date form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('venue', trans('quickadmin.tournaments.fields.venue').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('venue', old('venue'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('venue'))
                        <p class="help-block">
                            {{ $errors->first('venue') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('link', trans('quickadmin.tournaments.fields.link'), ['class' => 'control-label']) !!}
                    {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('link'))
                        <p class="help-block">
                            {{ $errors->first('link') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_email', trans('quickadmin.tournaments.fields.contact_email'), ['class' => 'control-label']) !!}
                    {!! Form::text('contact_email', old('contact_email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contact_email'))
                        <p class="help-block">
                            {{ $errors->first('contact_email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('publish_email', trans('quickadmin.tournaments.fields.publish_email'), ['class' => 'control-label']) !!}
		    {!! Form::hidden('publish_email', 0) !!}
                    {!! Form::checkbox('publish_email', 1, old('publish_email')) !!}
                    <p class="help-block"></p>
                    @if($errors->has('publish_email'))
                        <p class="help-block">
                            {{ $errors->first('publish_email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', trans('quickadmin.tournaments.fields.address').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('entry_fee', trans('quickadmin.tournaments.fields.entry_fee').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('entry_fee', old('entry_fee'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('entry_fee'))
                        <p class="help-block">
                            {{ $errors->first('entry_fee') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('reg_time', trans('quickadmin.tournaments.fields.reg_time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('reg_time', old('reg_time'), ['class' => 'time form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('reg_time'))
                        <p class="help-block">
                            {{ $errors->first('reg_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('start_time', trans('quickadmin.tournaments.fields.start_time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('start_time', old('start_time'), ['class' => 'time form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('start_time'))
                        <p class="help-block">
                            {{ $errors->first('start_time') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });

            $('.time').datetimepicker({
                format: "hh:mm",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
            
@stop
