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
        @if (Auth::guard('professor')->check())
            <a href="{{ url('menu/professor') }}">Menu</a>
            <a href="{{ url('logout') }}">Logout</a>
        @else
            @if (Auth::guard('admin')->check())
                <a href="{{ url('menu/administrador') }}">Menu</a>
                <a href="{{ url('logout') }}">Logout</a>
            @else
                @if (Auth::guard('aluno')->check())
                    <a href="{{ url('menu/aluno') }}">Menu</a>
                    <a href="{{ url('logout') }}">Logout</a>
                @else
                    <a href="{{ url('/login') }}">Entrar</a>
                @endif
            @endif
        @endif
    </div>
</div>
