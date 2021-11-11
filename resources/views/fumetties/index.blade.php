@extends('layouts.main')

@section('title', 'Homepage')

@section('main-section-id')

@section('main-content')
       <h1 class="card-title mb-3">Lista fumetti</h1>
       <div class="table-wrapper p-5">
           <table class="table p-5">
               <thead>
                   <tr>
                       <th scope="col">Titolo</th>
                       <th scope="col">Autore</th>
                       <th scope="col">Descrizione</th>
                   </tr>
               </thead>
               <tbody>
                   @forelse ($fumetties as $fumetti)
                       <tr>
                           <td>{{$fumetti->title}}</td>
                           <td>{{$fumetti->author}}</td>
                           <td>{{$fumetti->description}}</td>
                       </tr>
                       
                   @empty
                       <tr>

                       </tr>
                   @endforelse
               </tbody>
           </table>
       </div>
    
@endsection