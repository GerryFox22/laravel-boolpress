@extends("layouts.main")


@section('content')
    <div class="container">
        <div class="single-post mt-4">

            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <div class="col-2 mb-3 ">
                <img src="{{ $post->image_url }}" alt="immagine {{ $post->title }}">
            </div>  
                
            <div class="col-10">

                <p><strong>Categoria : </strong> 
                    @if ($post->category) {{ $post->category->name }} @else Nessuna categoria. 
                    @endif
                </p>
                <p><strong>Autore : </strong> {{ $post->author }}</p>
                <p><strong>Scritto il:</strong> {{ $post->date }}</p>
                <p><strong>Contenuto : </strong> {{ $post->content }}</p>
            </div>  
                
                
            <a href="{{ route('admin.posts.index') }}">Ritorna ai posts</a>
            
        </div>
    </div>
@endsection