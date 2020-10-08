<!doctype html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container" align="center">
            <header class="row">
                @include('includes.header')
            </header>
            <br>
            <h1>Nome do Curso</h1>
            <br>
            <div class="container pt-3">
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/') }}">Meu Perfil</a><br>
                        <a href="{{ url('listar/alunos') }}">Listar Alunos</a><br>
                        <a href="{{ url('listar/professores') }}">Listar Professores</a><br>
                        <a href="{{ url('listar/turmas') }}">Listar Turmas</a><br>
                    </div>
                    <div class="col">
                        <a href="{{ url('listar/apostilas') }}">Listar Apostilas</a><br>
                        <a href="{{ url('listar/mensagens') }}">Listar Mensagens</a><br>
                        <a href="{{ url('/cadastrar/apostila') }}">Adicionar Apostila</a><br>
                    </div>
                </div>
            </div>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
