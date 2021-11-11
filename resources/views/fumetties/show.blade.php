@extends('layouts.main')

@section('title', $fumetti->title)

@section('main-section-id', 'fumetti-show')

@section('main-content')
       <h1 class="card-title mb-3">{{$fumetti->title}}</h1>
       <hr>
       <div class="card-body row">
           <div class="col-4">
               <img src="{{$fumetti->url}}" alt="">
           </div>
           <div class="col-8">

           </div>
       </div>
       
    
@endsection