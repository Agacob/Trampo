<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @yield('styles')
</head>
<body class="bg-dark">    
    <div class=" p-3 mb-2  text-light mx-auto">        
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <a href="/contacts" class="collapse navbar-collapse text-info  h3"> Listar Contatos 📖</a>
                <a href="/contacts/create" class="collapse navbar-collapse  text-info h3 ">Criar novo Contato 🆕</a>
                <a href="/" class="collapse navbar-collapse  text-info h3 ">Tele Inicial 📁</a>
                <a href="/authors" class="collapse navbar-collapse  text-info h3"> Autor 🐼</a>
            </nav>
        @yield('content')
    </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>