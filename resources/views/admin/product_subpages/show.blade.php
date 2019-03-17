@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.product_subpages.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.product_subpages.fields.title')</th>
                            <td field-key='title'>{{ $subpage->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpages.fields.slug')</th>
                            <td field-key='slug'>{{ $subpage->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpages.fields.published')</th>
                            <td field-key='published_at'>{{ $subpage->published }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpages.fields.position')</th>
                            <td field-key='published_at'>{{ $subpage->position }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpages.fields.content')</th>
                            <td field-key='content'>{!! $subpage->content !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.product_subpages.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

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
