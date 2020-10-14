<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0" align="center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container" align="center">
            <div class="card" align="center">
                <h3 align="center">Menu - Administrador</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('admin/listar/administradores') }}" class="btn2 btn">Listar Administradores</a><br><br>
                            <a href="{{ url('admin/listar/alunos') }}" class="btn2 btn">Listar Alunos</a><br><br>
                            <a href="{{ url('admin/listar/professores') }}" class="btn2 btn">Listar Professores</a><br><br>
                            <a href="{{ url('listar/turmas') }}" class="btn2 btn">Listar Turmas</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('listar/apostilas') }}" class="btn2 btn">Listar Apostilas</a><br><br>
                            <a href="{{ url('listar/mensagens') }}" class="btn2 btn">Listar Mensagens</a><br><br>
                            <a href="{{ url('/cadastrar/apostila') }}" class="btn2 btn">Adicionar Apostila</a><br><br>
                            <a href="{{ url('/cadastrar/turma') }}" class="btn2 btn">Adicionar Turma</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('/cadastrar/administrador') }}" class="btn2 btn">Cadastrar Administrador</a><br><br>
                            <a href="{{ url('/mensagem/nova') }}" class="btn2 btn">Enviar Mensagem</a><br><br>
                            <a href="{{ url('/visualizar/administrador/'.$id) }}" class="btn2 btn">Meu Perfil</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
