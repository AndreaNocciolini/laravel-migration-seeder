@extends('layouts.base')

@section('content')
    <main style="height:100vh" class="w-100 d-flex flex-column justify-content-center align-items-center bg-primary">
        <h3 class="p-2">DETTAGLI TRENO</h3>
        <div class="row p-2">
            <div class="col">
                <ul class="list-unstyled card bg-info p-2">
                    <li class="fst-italic fw-bolder">{{ $train->Azienda }}</li>
                    <li>Da: {{ $train->Stazione_di_partenza }}</li>
                    <li>A: {{ $train->Stazione_di_arrivo }}</li>
                    <li>Data: {{ $train->Data }}</li>
                    <li>Partenza: {{ $train->Orario_di_partenza }}</li>
                    <li>Arrivo: {{ $train->Orario_di_arrivo }}</li>
                    <li>Treno: {{ $train->Codice_treno }}</li>
                    <li>Carrozze: {{ $train->Numero_carrozze }}</li>
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
                    <li><a href="{{ route('trains.show', $train) }}">Dettagli Treno</a></li>
                </ul>
            </div>
        </div>
    </main>
@endsection
