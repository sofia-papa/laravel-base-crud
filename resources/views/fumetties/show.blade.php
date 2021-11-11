@extends('layouts.main')

@section('title', $fumetti->title . 'Fumetti')

@section('main-section-id', 'fumetti-show')

@section('main-content')
       <h1 class="card-title mb-3">{{$fumetti->title}}</h1>
       <hr>
       <div class="card-body row">
           <div class="col-4 ">
               <img class="fumetti-img" src="{{$fumetti->url}}" alt="{{$fumetti->title}} picture">
           </div>
           <div class="col-8">
               <h2>{{$fumetti->author}}</h2>
               <p>{{$fumetti->description}}</p>

           </div>
       </div>
       
    
@endsection