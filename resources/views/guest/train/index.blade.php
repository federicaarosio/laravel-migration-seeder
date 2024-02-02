@extends('layouts.app')

@section('main-content')

@forelse ($trains as $train)
    Train from: {{ $train-> departure_station}} - to: {{ $train->arrival_station }}<br>
@empty
    <p>
        No trains here.
    </p>
@endforelse

@endsection