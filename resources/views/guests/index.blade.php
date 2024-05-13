@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Treni in partenza</h2>
        <p><strong>Data di oggi: </strong>{{ $today }}</p>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($trains as $train)
                <div class=2col-3">
                    <a class="link-offset-2 link-underline link-underline-opacity-0"
                        href="{{ route('guests.show', $train) }}">
                        <div class=" card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $train['Stazione_di_partenza'] }} -
                                    {{ $train['Stazione_di_arrivo'] }}</h3>

                                <p><strong>Azienda:</strong> {{ $train['Azienda'] }}</p>
                                <h4>Partenza</h4>
                                <p class="m-0"><strong>Data Partenza:</strong> {{ $train['date'] }}</p>
                                <p class="m-0"><strong>Stazione di partenza:</strong> {{ $train['Stazione_di_partenza'] }}
                                </p>
                                <p><strong>Orario di partenza:</strong> {{ $train['Orario_di_partenza'] }}</p>
                                <h4>Arrivo</h4>
                                <p class="m-0"><strong>Stazione di Arrivo:</strong> {{ $train['Stazione_di_arrivo'] }}
                                </p>
                                <p><strong>Orario di Arrivo:</strong> {{ $train['Orario_di_arrivo'] }}</p>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
