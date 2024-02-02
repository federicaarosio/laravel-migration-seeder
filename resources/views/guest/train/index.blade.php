@extends('layouts.app')

@section('main-content')

@forelse ($trains as $train)
    <strong>Train from:</strong> {{ $train-> departure_station}} - <strong>to:</strong> {{ $train->arrival_station }}<br>
@empty
    <p>
        No trains here.
    </p>
@endforelse

@endsection