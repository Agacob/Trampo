@extends('layouts.main')

@section('title', 'Contatos')

@section('content')    
    <table>
        <thead>
            <tr>
                <th> Lista de Contatos </th>
            </tr>
        <tbody>
            @foreach ( $contacts as $contact)
            <tr>
                <td>{{ $contact->name}}</td>     
                <td>{{ $contact->email}}</td>
                <td>{{ $contact->phone}}</td>          
            </tr>
            @endforeach
        </tbody>     
    </table>

@endsection