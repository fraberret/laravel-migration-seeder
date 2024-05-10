@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <a href="{{ route('guests.show', $train) }}">
                    <div class="col">
                        <div class="card">
                            <h3>{{ $train['Azienda'] }}</h3>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
