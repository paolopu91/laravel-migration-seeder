@extends('layouts.app')


@section('page_title','Trains')

@section('page_content',)
    
<div class="section-main">
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6">
                    <ul class="list-unstyled text-center pt-5 bg-dark">
                        <li>
                           <span class="text-secondary">Azienda:</span> <span class="text-success">{{$train['Azienda']}}</span> 
                        </li>

                        <li>
                           <span class="text-secondary">Stazione di partenza:</span>  <span class="text-success">{{$train['Stazione_di_partenza']}}</span> 
                        </li>
                        </li>
                        <li>
                            <span class="text-secondary">Stazione di arrivo:</span>  <span class="text-success">{{$train['Stazione_di_arrivo']}}</span>
                        </li>
                        <li>
                            <span class="text-secondary">Orario di partenza:</span>  <span class="text-success">{{$train['Orario_di_partenza']}}</span>
                        </li>
                        <li>
                            <span class="text-secondary">Orario di arrivo:</span>  <span class="text-success">{{$train['Orario_di_arrivo']}}</span>
                        </li>
                        <li>
                            <span class="text-secondary">Codice Treno:</span>  <span class="text-success">{{$train['Codice_Treno']}}</span>
                        </li>
                        <li>
                            <span class="text-secondary">Numero Carrozze:</span>  <span class="text-success"{{$train['Numero_Carrozze']}}></span>
                        </li>
                        <li>
                            <span class="text-secondary">In Orario:</span>  <span class="text-success">{{$train['In_orario']}}</span>
                        </li>
                        <li>
                            <span class="text-secondary">Cancellato:</span>  <span class="text-success">{{$train['Cancellato']}}</span>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection