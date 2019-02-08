@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tournaments.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.tournamentset')</th>
                            <td field-key='tournamentset'>{{ $tournament->tournamentset->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.region')</th>
                            <td field-key='region'>{{ $tournament->region }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.subregion')</th>
                            <td field-key='subregion'>{{ $tournament->subregion }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.date')</th>
                            <td field-key='date'>{{ $tournament->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.venue')</th>
                            <td field-key='venue'>{{ $tournament->venue }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.TO_name')</th>
                            <td field-key='TO_name'>{{ $tournament->TO_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.TO_slack')</th>
                            <td field-key='TO_slack'>{{ $tournament->TO_slack }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.contact_email')</th>
                            <td field-key='contact_email'>{{ $tournament->contact_email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.address')</th>
                            <td field-key='address'>{{ $tournament->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.entry_fee')</th>
                            <td field-key='entry_fee'>{{ $tournament->entry_fee }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.reg_time')</th>
                            <td field-key='reg_time'>{{ $tournament->reg_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournaments.fields.start_time')</th>
                            <td field-key='start_time'>{{ $tournament->start_time }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.tournaments.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
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
            
        });
    </script>
            
@stop
