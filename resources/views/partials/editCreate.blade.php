
                
                    <div class="card-title d-flex justify-content-between">
                        <h1>{{ $request->routeIs('fumetties.edit') ? 'Modifica $guest->title' : 'inserisci un nuovo ospite'}}</h1>
                        <a href="{{ route('fumetties.index')}}">Torna alla lista degli ospiti</a>
                    </div>
                    <div class="card-body">
                            <form action="{{ $request->routeIs('fumetties.edit') ? route('fumetties.update', $fumetti) : route('fumetties.store')}}" method="POST">
                            @if($request->routeIs('fumetties.edit'))
                                @method('PATCH')
                            @endif
                            @csrf

                            <div class="row">
                            <div class="col-4 mb-3">
                                <label class="form-label" for="title">Nome fumetto</label>
                                <input class="form-control" type="text" id="name" name="title" placeholder="Titolo"
                                value="{{$fumetti->title}}" required>

                                <div class="form-text">Inserisci il nome del fumetto da inserire</div>
                            </div>

                            <div class="col-4 mb-3">
                                <label class="form-label" for="author">Autore fumetto</label>
                                <input class="form-control" type="text" id="name" name="author" placeholder="Autore"
                                value="{{$fumetti->author}}" required>

                                <div class="form-text">Inserisci l'autore del fumetto da inserire</div>
                            </div>

                            <div class="col-4 mb-3">
                                <label class="form-label" for="description">Descrizione fumetto</label>
                                <input class="form-control" type="text" id="name" name="description" placeholder="Descrizione"
                                value="{{$fumetti->description}}">

                                <div class="form-text">Inserisci la descrizione del fumetto da inserire</div>
                            </div>

                            <div class="col-4 mb-3">
                                <label class="form-label" for="url">Immagine fumetto</label>
                                <input class="form-control" type="text" id="name" name="url" placeholder="Immagine"
                                value="{{$fumetti->url}}">

                                <div class="form-text">Inserisci l'immagine del fumetto da inserire</div>
                            </div>
                            </div>

                            <div class="col-12 mb-4 text-end">
                                <button type="reset" class="btn btn-secondary">Cancella i campi</button>
                                <button type="submit" class="btn btn-success">@yield('submit-button')</button>
                            </div>
                        </form>
                </div>
  

  
 
 
    

