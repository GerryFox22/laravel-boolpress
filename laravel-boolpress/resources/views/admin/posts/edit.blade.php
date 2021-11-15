@extends("layouts.main")


@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', ['post' => $post->id ]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Inserisci il titolo</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo" require
                value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="image_url">Inserisci l'immagine</label>
                <input type="text" class="form-control" id="image_url" name="image_url"  placeholder="Immagine Url" require
                value="{{ $post->image_url }}">
            </div>
            <div class="form-group">
                <label for="author">Inserisci l'autore</label>
                <input type="text" class="form-control" id="author" name="author"  placeholder="Autore" require
                value="{{ $post->author }}">
            </div>
            <div class="form-group">
                <label for="date">Inserisci la data</label>
                <input type="text" class="form-control" id="date" name="date"  placeholder="Scritto il:" require
                value="{{ $post->date }}">
            </div>
            <div class="form-group">
                <label for="content">Inserisci il contenuto</label>
                <input type="text" class="form-control" id="content" name="content"  placeholder="Descrizione" require
                value="{{ $post->content }}"> 
            </div>
            
            <button type="reset" class="btn btn-primary">Resetta</button>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection