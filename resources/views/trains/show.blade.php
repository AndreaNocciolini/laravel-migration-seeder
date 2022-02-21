@extends('layouts.base')

@section('content')
    <h1>DETTAGLI TRENO</h1>
    <ul>
        <li>{{ $train->Azienda }}</li>
        <li>{{ $train->Stazione_di_partenza }}</li>
        <li>{{ $train->Stazione_di_arrivo }}</li>
        <li>{{ $train->Data }}</li>
        <li>{{ $train->Orario_di_partenza }}</li>
        <li>{{ $train->Orario_di_arrivo }}</li>
        <li>{{ $train->Codice_treno }}</li>
        <li>{{ $train->Numero_carrozze }}</li>
        @if ($train->In_orario == 1 && $train->Cancellato == 0)
            <li>In Orario</li>
        @elseif ($train->In_orario == 0 && $train->Cancellato == 0)
            <li>In Ritardo</li>
        @else
        @endif
        @if ($train->Cancellato == 1)
            <li>Treno Cancellato</li>
        @else
        @endif
    </ul>
@endsection
