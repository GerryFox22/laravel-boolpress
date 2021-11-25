@extends("layouts.main")


@section('content')
    <div class="container">
        <h1>Contattaci!</h1>
        <form action="{{ route('mail.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Inserisci il tuo nome</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Nome" require>
            </div>
        
            <div class="form-group">
                <label for="mail">Inserisci la tua email</label>
                <input type="text" class="form-control" id="mail" name="mail"  placeholder="Inserisci la tua email" require>
            </div>
            <div class="form-group">
                <label for="message">Inserisci l'autore</label>
                <input type="text" class="form-control" id="message" name="message"  placeholder="Insereisci il messaggio" require>
            </div>
            
            
            <button type="reset" class="btn btn-primary">Resetta</button>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection