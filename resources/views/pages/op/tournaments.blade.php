@extends('layouts.default')

@section('page-title', "NISEI - $set_title")

@section('content')

    @include('partials.main-title', [
        'heading' => $set_title
    ])

    <div class="page-content">
        <div class="container">
                @foreach ($regions as $region)
		    <div class="row"><div class="col-sm-12">
			<h1>{{ $region->name }}</h1>
			@foreach ($region->subregions as $subregion)
			    <h2>{{ $subregion->name}}</h2>
			    <table class="table tournament">
			    <colgroup>
			    <col class="date">
			    <col class="venue">
			    <col class="details">
			    @foreach ($subregion->tournaments as $tournament)
			    <tr>
			    <td>{{ $tournament->date }}</td>
			    <td><b>{{ $tournament->venue }}</b><br/>{!! $tournament->address !!}</td>{{-- address escaped by controller instead of here because <br/> --}}
			    <td>Registration: {{ $tournament->reg_time }}<br/>
			        Start time: {{ $tournament->start_time }}<br/>
				Entry fee: {{ $tournament->entry_fee }}@if($tournament->publish_email && $tournament->contact_email)<br/>
				Contact: {{ $tournament->contact_email }}@endif @if($tournament->link)<br/>
				<a href="{{ $tournament->link }}">More details</a>@endif
			    </td>
			    </tr>
			    @endforeach
			    </table>
			@endforeach
		    </div></div>
                @endforeach
        </div>
    </div>
@stop
