@extends('layout.main')
@section('title','Receitas')

@section('content')

<div class="container py-5">
    <h1 class="receitas-title">Receitas</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        @foreach($events as $event)
        <div class="col">
            <div class="card border shadow-lg rounded d-flex align-items-stretch h-100">
                <img src="/img/receitas/{{$event->image}}" class="card-img-top" alt="{{$event->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">{{$event->description}}</p>
                    <a href="#" class="btn btn-primary">Ler mais</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col">
        <div class="row">
            {{$events->links()}}
        </div>
    </div>
</div>



@endsection