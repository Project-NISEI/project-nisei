@extends('layouts.default')

@section('page-title', 'NISEI - Tournaments')

@section('content')

    @include('partials.main-title', [
        'heading' => $set_title
    ])

    <div class="page-content">
        <div class="container">
            <div class="row masonry-grid">
                @foreach ($regions as $region)
                    <section class="grid-item">
			<h1>{{ $region->name }}</h1>
			@foreach ($region->subregions as $subregion)
			    <h2>{{ $subregion->name}}</h2>
			    @foreach ($subregion->tournaments as $tournament)
			    <article>
				<p>{{ $tournament->date }}</p>
				<p>{{ $tournament->venue }}</p>
				<p>{{ $tournament->address }}</p>
				<p>Entry fee: {{ $tournament->entry_fee }}</p>
				<p>TO: {{ $tournament->TO_name }} @if($tournament->TO_slack)({{ $tournament->TO_slack }} on stimslack)@endif</p>
				<p>Contact: {{ $tournament->contact_email }}</p>
				<p>Registration {{ $tournament->reg_time }}, start time {{ $tournament->start_time }}</p>
			    </article>
			    @endforeach
			@endforeach
                @endforeach
            </div>
        </div>
    </div>
@stop