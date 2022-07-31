@extends('layouts.app')


@section('page_title','Trains')

@section('page_content',)
    
<div class="section-main">
    <div class="container">
        <div class="row">
            @foreach ($dataTrains as $train)
                <div class="col-6">

                </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection