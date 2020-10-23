<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0 justify-content-center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <h3>Menu - Professor</h3>
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
                            <a href="{{ url('prof/listar/apostilas') }}" class="btn2 btn">Listar Apostilas</a><br><br>
                            <a href="{{ url('cadastrar/apostila') }}" class="btn2 btn">Adicionar Apostila</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
