@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        @forelse ($trains as $train)   
            <div class="col-4">
                <div class="train-info card mb-3">
                    <div class="card-body">
                        <div>
                            <strong>Train n°: </strong> {{ $train-> train_code }}
                        </div>
                        <div>
                            <strong>Train from:</strong> {{ $train-> departure_station }}
                        </div>
                        <div>
                            <strong>to:</strong> {{ $train-> arrival_station }}
                        </div>
                        <div>
                            <strong>Train agency:</strong> {{ $train-> agency }}
                        </div>
                        <div>
                            <strong>Departure time:</strong> {{ $train-> departure_time }}
                        </div>
                        <div>
                            <strong>Arrival time:</strong> {{ $train-> arrival_time }}
                        </div>
                        <div>
                            <strong>Wagon number:</strong> {{ $train-> wagon_number }}
                        </div>
                        <div>
                            <strong>On time:</strong> {{ $train-> on_time }}
                        </div>
                        <div>
                            <strong>Deleted:</strong> {{ $train-> deleted }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>
                No trains here.
            </p>
        @endforelse
    </div>
</div>

@endsection