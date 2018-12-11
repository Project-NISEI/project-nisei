@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.faqs.title')</h3>
    @can('faqs_create')
    <p>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

    </p>
    @endcan



    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($faqs) > 0 ? 'datatable' : '' }} @can('faqs_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('faqs_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.faqs.fields.question')</th>
                        <th>@lang('quickadmin.faqs.fields.position')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($faqs) > 0)
                        @foreach ($faqs as $faq)
                            <tr data-entry-id="{{ $faq->id }}">
                                @can('faqs_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $faq->question }}</td>
                                <td field-key='position'>{{ $faq->position }}</td>
                                                                <td>
                                    @can('faqs_view')
                                    <a href="{{ route('admin.faqs.show',[$faq->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('faqs_edit')
                                    <a href="{{ route('admin.faqs.edit',[$faq->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('faqs_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.faqs.destroy', $faq->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('faqs_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.faqs.mass_destroy') }}';
        @endcan

    </script>
@endsection
