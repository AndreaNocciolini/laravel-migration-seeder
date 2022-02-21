@extends('layouts.base')

@section('content')
    {{-- <?php
//use Carbon\Carbon;
//$date = Carbon::now();
?> --}}

    <main>
        <div>

            {{-- La parte commentata del codice si rifà alla parte commentata nel Train Controller,
dove prendevo tutti i dati e li passavo a questa pagina e da qui li filtravo in modo da 
mostrare i dati che partivano oggi e poi tutti i treni. --}}

            {{-- La parte non commentata allo stesso modo si rifà alla parte non commenta in Train Controller,
dove filtro i dati direttamente nel controller e passo direttamente solo ciò che mi interessa
alla pagina. --}}

            {{-- <h1>TRENI ODIERNI</h1>
            @foreach ($trains as $train)
                @if ($train->Data == $date->toDateString())
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
                @endif
            @endforeach --}}


            <h2 class="p-3">TUTTI I TRENI(DA OGGI IN POI)</h2>
            <div class="row p-3">
                <div class="col">
                    {{ $trains->links() }}
                </div>
            </div>
            <div class="row row-cols-4 p-3 g-3">
                @foreach ($trains as $train)
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
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    {{ $trains->links() }}
                </div>
            </div>
    </main>
@endsection
