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
            <div class="card" align="center">
                <h3 align="center">Menu - Professor</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('/visualizar/professor/'.$id) }}" class="btn2 btn">Meu Perfil</a><br><br>
                            <a href="{{ url('listar/alunos') }}" class="btn2 btn">Listar Alunos</a><br><br>
                            <a href="{{ url('listar/professores') }}" class="btn2 btn">Listar Professores</a><br><br>
                            <a href="{{ url('listar/administradores') }}" class="btn2 btn">Listar Administradores</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('listar/turmas') }}" class="btn2 btn">Listar Turmas</a><br><br>
                            <a href="{{ url('listar/apostilas') }}" class="btn2 btn">Listar Apostilas</a><br><br>
                            <a href="{{ url('cadastrar/apostila') }}" class="btn2 btn">Adicionar Apostila</a><br><br>
                        </div>
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
