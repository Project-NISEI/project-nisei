@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tournamentsets.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.tournamentsets.fields.title')</th>
                            <td field-key='title'>{{ $tournamentset->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournamentsets.fields.slug')</th>
                            <td field-key='slug'>{{ $tournamentset->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.tournamentsets.fields.display')</th>
                            <td field-key='display'>{{ $tournamentset->display }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.tournamentsets.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


