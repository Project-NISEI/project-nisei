@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.product_subpage.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.title')</th>
                            <td field-key='title'>{{ $subpage->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.slug')</th>
                            <td field-key='slug'>{{ $subpage->slug }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.published-at')</th>
                            <td field-key='published_at'>{{ $subpage->published_at }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.author')</th>
                            <td field-key='author'>{{ $subpage->author->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.listing_image')</th>
                            @if ($subpage->listing_image)
                                <td field-key='listing_image'><img src="{{ $subpage->listing_image }}" alt="" style="max-width: 100%; width: 300px;"></td>
                            @else
                                <td field-key="listing_image">-</td>
                            @endif
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.category')</th>
                            <td field-key='author'>{{ $subpage->category->title ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.product_subpage.fields.content')</th>
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
