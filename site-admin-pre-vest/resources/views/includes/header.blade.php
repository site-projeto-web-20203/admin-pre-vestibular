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
        @if (Route::has('login'))
            <!-- lembrar de verificar e alterar p logout -->
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Entrar</a>
            @endauth
        @endif
    </div>
</div>
