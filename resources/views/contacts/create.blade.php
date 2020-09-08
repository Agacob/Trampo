@extends('layouts.main')

@section('title', 'Cadastrar nova categoria')

@section('content')
    <h1>Novo Contato</h1>
    <form action="/contacts" method="POST">
        @csrf
        <div class="form-group">
            <label for="contact">Nome do contato</label>
            <input type="text" name="name" id="contact" class="form-control" value="{{old('name')}}">
            @error('name')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label for="contact">Email do contato</label>
            <input type="text" name="email" id="contact" class="form-control" value="{{old('email')}}">
            @error('email')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
            <label for="contact">Telefone do contato</label>
            <input type="text" name="phone" id="contact" class="form-control" value="{{old('phone')}}">            
        </div>
        <div>
            <button type="submit" class="btn btn-light">Salvar 💾</button>
        </div>
    </form>
@endsection