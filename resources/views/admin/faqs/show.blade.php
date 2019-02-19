@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.faqs.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.faqs.fields.question')</th>
                            <td field-key='title'>{{ $faq->question }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.faqs.fields.answer')</th>
                            <td field-key='conteanswernt'>{!! $faq->answer !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.faqs.fields.position')</th>
                            <td field-key='conteanswernt'>{!! $faq->position !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.faqs.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
