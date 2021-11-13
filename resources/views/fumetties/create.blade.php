@extends('layouts.main')

@section('title', 'Creazione nuovo ospite')

@section('main-section-id', 'fumetti-create')

@section('main-section-classes', 'fumetti-wrapper p-5 mt-5')

@section('main-content')
     <div class="card-title d-flex justify-content-between">
          <h1>Crea un nuovo ospite</h1>
          <a href="{{ route('fumetties.index')}}">Torna alla lista degli ospiti</a>
     </div>
     <div class="card-body">
          <form action="{{route('fumetties.store')}}" method="POST">
            @csrf

              <div class="row">
                <div class="col-4 mb-3">
                    <label class="form-label" for="title">Nome fumetto</label>
                    <input class="form-control" type="text" id="name" name="title" placeholder="Titolo" required>

                    <div class="form-text">Inserisci il nome del fumetto da inserire</div>
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="author">Autore fumetto</label>
                    <input class="form-control" type="text" id="name" name="author" placeholder="Autore">

                    <div class="form-text">Inserisci l'autore del fumetto da inserire</div>
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="description">Descrizione fumetto</label>
                    <input class="form-control" type="text" id="name" name="description" placeholder="Descrizione">

                    <div class="form-text">Inserisci la descrizione del fumetto da inserire</div>
                </div>

                <div class="col-4 mb-3">
                    <label class="form-label" for="url">Immagine fumetto</label>
                    <input class="form-control" type="text" id="name" name="url" placeholder="Immagine">

                    <div class="form-text">Inserisci l'immagine del fumetto da inserire</div>
                </div>
              </div>

              <div class="col-12 mb-4 text-end">
                  <button type="reset" class="btn btn-secondary">Cancella i campi</button>
                  <button type="submit" class="btn btn-success">Inserisci nuovo fumetto</button>
              </div>
          </form>
     </div>
    

@endsection