@extends('layouts.main')

@section('title', 'Contatos')

@section('content')    
    <table class="table table-bordered table-striped table-dark ">
        <thead>
            <tr>
                <th scope="col" colspan="5" class="mx-auto h3"> Lista de Contatos </th>
            </tr>
        <tbody>
            @foreach ( $contacts as $contact)
            <tr>
                <td>{{ $contact->name}}</td>     
                <td>{{ $contact->email}}</td>
                <td>{{ $contact->phone}}</td>
                <td><a href="/contacts/{{ $contact->id }}/edit" class="navbar-brand text-info">✏️</a></td>                
                <td>
                <form action="/contacts/{{ $contact->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class=" btn " type="submit">⚰️</button>
                </form></td>         
            </tr>
            @endforeach
        </tbody>     
    </table>
@endsection