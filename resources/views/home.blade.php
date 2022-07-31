@extends('layouts.app')


@section('page_title','Trains')

@section('page_content',)
    
<div class="section-main">
    <div class="container">
        <div class="row">
            @foreach ($dataTrains as $train)
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li>
                            Azienda: {{$train['Azienda']}}
                        </li>

                        <li>
                            Stazione di partenza: {{$train['Stazione_di_Partenza']}}
                        </li>
                        <li>
                            Stazione di arrivo: {{$train['Stazione_di_Arrivo']}}
                        </li>
                        <li>
                            Orario di partenza: {{$train['Orario_di_Partenza']}}
                        </li>
                        <li>
                            Orario di arrivo: {{$train['Orario_di_Arrivo']}}
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection