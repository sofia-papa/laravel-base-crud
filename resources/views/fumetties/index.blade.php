@extends('layouts.main')

@section('title', 'Homepage')

@section('main-section-id')

@section('main-content')
       <h1 class="card-title mb-3">Lista fumetti</h1>
       <div class="table-wrapper p-5">
           
        <form method="GET">
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cerca fumetto" name="search">
              <button class="btn btn-primary" type="submit">Cerca</button>
            </div>
        </form>

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
                           <td><a href="{{route('fumetties.show', $fumetti->id)}}">{{$fumetti->title}}</a></td>
                           <td>{{$fumetti->author}}</td>
                           <td>{{$fumetti->description}}</td>
                           <td><a href="{{route('fumetties.edit', $fumetti->id)}}" class="btn btn-secondary">Modifica</a></td>
                       </tr>
                   @empty
                       <tr>
                          <td colspan="5" class="text-center">Non ho trovato ospiti con questo nome</td>
                       </tr>
                   @endforelse
               </tbody>
           </table>
       </div>
    
@endsection