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
                <h3>Menu - Administrador</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('admin/listar/administradores') }}" class="btn2 btn">Administradores</a><br><br>
                            <a href="{{ url('admin/listar/alunos') }}" class="btn2 btn">Alunos</a><br><br>
                            <a href="{{ url('admin/listar/professores') }}" class="btn2 btn">Professores</a><br><br>
                            <a href="{{ url('admin/listar/turmas') }}" class="btn2 btn">Turmas</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('admin/listar/apostilas') }}" class="btn2 btn">Apostilas</a><br><br>
                            <a href="{{ url('listar/mensagens') }}" class="btn2 btn">Mensagens</a><br><br>
                            <a href="{{ url('cadastrar/apostila') }}" class="btn2 btn">Adicionar Apostila</a><br><br>
                            <a href="{{ url('cadastrar/turma') }}" class="btn2 btn">Adicionar Turma</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('cadastrar/administrador') }}" class="btn2 btn">Cadastrar Administrador</a><br><br>
                            <a href="{{ url('mensagem/nova') }}" class="btn2 btn">Enviar Mensagem</a><br><br>
                            <a href="{{ url('visualizar/administrador/'.$id) }}" class="btn2 btn">Meu Perfil</a><br><br>
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
