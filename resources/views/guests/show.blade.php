@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>{{ $train['Azienda'] }}</h3>
            </div>
            <div class="col">

                <div>{{ $train->Stazione_di_arrivo }}</div>
                <div>{{ $train->Stazione_di_partenza }}</div>
            </div>
        </div>
    </div>
@endsection
