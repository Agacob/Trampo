@extends('layouts.main')

@section('title', 'Contatos')

@section('content')    
    <table class="table table-bordered table-striped table-dark ">
        <thead>
            <tr>
                <th scope="col" colspan="5" class="mx-auto"> Lista de Contatos </th>
            </tr>
        <tbody>
            @foreach ( $contacts as $contact)
            <tr>
                <td>{{ $contact->name}}</td>     
                <td>{{ $contact->email}}</td>
                <td>{{ $contact->phone}}</td>
                <td><a href="" class="navbar-brand text-info">✏️</a></td>
                <td><a href="" class="navbar-brand text-info">⚰️</a></td>         
            </tr>
            @endforeach
        </tbody>     
    </table>
@endsection