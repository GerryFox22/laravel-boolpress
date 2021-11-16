@extends("layouts.main")


@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Inserisci il titolo</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo" require>
            </div>
            <div class="form-group">
                <label for="category_id">Inserisci la categoria</label>
                <select id="category_id" name="category_id" require>
                    <option selected>Nessuna Categoria </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach 
                </select>
            </div>
        
            <div class="form-group">
                <label for="image_url">Inserisci l'immagine</label>
                <input type="text" class="form-control" id="image_url" name="image_url"  placeholder="Immagine Url" require>
            </div>
            <div class="form-group">
                <label for="author">Inserisci l'autore</label>
                <input type="text" class="form-control" id="author" name="author"  placeholder="Autore" require>
            </div>
            <div class="form-group">
                <label for="date">Inserisci la data</label>
                <input type="text" class="form-control" id="date" name="date"  placeholder="Scritto il:" require>
            </div>
            <div class="form-group">
                <label for="content">Inserisci il contenuto</label>
                <input type="text" class="form-control" id="content" name="content"  placeholder="Descrizione" require> 
            </div>
            
            <button type="reset" class="btn btn-primary">Resetta</button>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection