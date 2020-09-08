@extends('layouts.main')

@section('title', 'Editar Contato')

@section('content')
    <h1>Editar Contato</h1>
    <form action="/contacts/{{ $contact->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="contact">Nome do contato</label>
            <input type="text" name="name" id="contact" class="form-control" value="{{ $contact->name }}">
            @error('name')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label for="contact">Email do contato</label>
            <input type="text" name="email" id="contact" class="form-control" value="{{ $contact->email }}">
            @error('email')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label for="contact">Telefone do contato</label>
            <input type="text" name="phone" id="contact" class="form-control" value="{{ $contact->phone }}">            
        </div>
        <div>
            <button type="submit" class="btn btn-light">Salvar</button>
        </div>
    </form>
@endsection