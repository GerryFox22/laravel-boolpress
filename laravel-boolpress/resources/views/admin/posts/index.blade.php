@extends("layouts.main")

@section('content')
<div class="container">
        <div class="row mt-4 justify-content-center">
            <h1 class="mb-4">I miei Post</h1>
            @foreach ($posts as $post)
                <div class="col-12 mb-4">
                    <h5 class="mb-4">{{ $post->title }}</h5>
                    <p><strong>Autore : </strong> {{ $post->author }}</p>
                    <p><strong>Descrizione : </strong> {{ $post->content }}</p>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id ]) }}">
                        <button class="btn btn-primary">Post completo</button>
                    </a>

                    
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection