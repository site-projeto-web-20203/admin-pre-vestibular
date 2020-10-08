<div class="nav">
    <div class="logo">
        <a href="/">NOME DO CURSO</a>
    </div>
    <br>
    <div class="navbar">
        <a class="active" href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/cadastrar/aluno') }}">Inscrição do Aluno</a>
        <a href="{{ url('cadastrar/professor') }}">Inscrição do Professor</a>
        <a href="{{ url('listar/apostilas') }}">Apostilas</a>
        <a href="{{ url('menu/administrador') }}">Entrar</a>
        <a href="{{ url('logout') }}">Logout</a>
    </div>
</div>
