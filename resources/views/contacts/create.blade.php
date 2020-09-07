@extends('layouts.main')

@section('title', 'Cadastrar nova categoria')

@section('content')
    <h1>Novo Contato</h1>
    <form action="/contacts/store" method="POST">
        @csrf
        <div>
            <label for="contact">Nome do contato</label>
            <input type="text" name="name" id="contact">
            <label for="contact">Email do contato</label>
            <input type="text" name="email" id="contact">
            <label for="contact">Telefone do contato</label>
            <input type="text" name="phone" id="contact">            
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection