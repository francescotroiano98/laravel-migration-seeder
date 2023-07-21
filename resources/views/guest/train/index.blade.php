@extends('layouts.app')

@section('title', 'Trains list')


@section('main-content')

<h1>Trains departing today</h1>

<section class="container">
                <div class="row">
                    @foreach ($trainsToday as $train)
                    <div class="col-4">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Codice Treno: {{ $train->Codice_Treno }}</div>
                                <div class="card-body text-success">
                                    
                                    <p class="card-text">Azienda: {{ $train->Azienda }}</p>
                                    <p class="card-text">Partenza: {{ $train->Stazione_di_partenza }}</p>
                                    <p class="card-text"> Arrivo: {{ $train->Stazione_di_arrivo }}</p>
                                    <p class="card-text">Orario di partenza: {{ $train->Orario_di_partenza }}</p>
                                    <p class="card-text">Orario di arrivo: {{ $train->Orario_di_arrivo }}</p>
                                    <p class="card-text">Numero Carrozze: {{ $train->Numero_Carrozze }}</p>
                                    <p class="card-text">In orario: {{ $train->In_orario ? 'Si' : 'No' }}</p>
                                    <p class="card-text">Cancellato: {{ $train->Cancellato ? 'Si' : 'No' }}</p>
                                </div>
                            </div> 
                        </div>
                    @endforeach
                </div>
            </section>

    

    
        

@endsection