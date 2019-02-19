@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tournaments.title')</h3>
    @can('tournament_create')
    <p>
        <a href="{{ route('admin.tournaments.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('tournament_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.tournaments.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.tournaments.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($tournaments) > 0 ? 'datatable' : '' }} @can('tournament_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('tournament_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.tournaments.fields.tournamentset')</th>
                        <th>@lang('quickadmin.tournaments.fields.region')</th>
                        <th>@lang('quickadmin.tournaments.fields.subregion')</th>
                        <th>@lang('quickadmin.tournaments.fields.venue')</th>
                        <th>@lang('quickadmin.tournaments.fields.date')</th>
                        <th>@lang('quickadmin.tournaments.fields.link')</th>
                        <th>@lang('quickadmin.tournaments.fields.contact_email')</th>
                        <th>@lang('quickadmin.tournaments.fields.publish_email')</th>
                        <th>@lang('quickadmin.tournaments.fields.address')</th>
                        <th>@lang('quickadmin.tournaments.fields.entry_fee')</th>
                        <th>@lang('quickadmin.tournaments.fields.reg_time')</th>
                        <th>@lang('quickadmin.tournaments.fields.start_time')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($tournaments) > 0)
                        @foreach ($tournaments as $tournament)
                            <tr data-entry-id="{{ $tournament->id }}">
                                @can('tournament_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='tournament_set_id'>{{ $tournament->tournamentset->title }}</td>
                                <td field-key='region'>{{ $tournament->region }}</td>
                                <td field-key='subregion'>{{ $tournament->subregion }}</td>
                                <td field-key='venue'>{{ $tournament->venue }}</td>
                                <td field-key='date'>{{ $tournament->date }}</td>
                                <td field-key='venue'>{{ $tournament->link }}</td>
                                <td field-key='contact_email'>{{ $tournament->contact_email }}</td>
                                <td field-key='contact_email'>{{ $tournament->publish_email }}</td>
                                <td field-key='address'>{{ $tournament->address }}</td>
                                <td field-key='entry_fee'>{{ $tournament->entry_fee }}</td>
                                <td field-key='reg_time'>{{ $tournament->reg_time }}</td>
                                <td field-key='start_time'>{{ $tournament->start_time }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('tournament_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tournaments.restore', $tournament->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('tournament_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tournaments.perma_del', $tournament->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('tournament_view')
                                    <a href="{{ route('admin.tournaments.show',[$tournament->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('tournament_edit')
                                    <a href="{{ route('admin.tournaments.edit',[$tournament->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('tournament_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.tournaments.destroy', $tournament->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
