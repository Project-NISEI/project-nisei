@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.events.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.events.fields.name')</th>
                            <td field-key='name'>{{ $event->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.slug')</th>
                            <td field-key='slug'>{{ $event->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.listing_image')</th>
                            @if ($event->listing_image)
                                <td field-key='listing_image'><img src="{{ $event->listing_image }}" alt="" style="max-width: 100%; width: 300px;"></td>
                            @else
                                <td field-key="listing_image">-</td>
                            @endif
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.type')</th>
                            <td field-key='type'>{{ $event->type }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.active')</th>
                            <td field-key='active'>{{ Form::checkbox("active", 1, $event->active == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.price')</th>
                            <td field-key='author'>{{ $event->price }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.content')</th>
                            <td field-key='content'>{!! $event->content !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.events.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


