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
                <h3>Menu - Aluno</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('/visualizar/aluno/'.$id) }}" class="btn2 btn">Meu Perfil</a><br><br>
                            <a href="{{ url('/') }}" class="btn2 btn">Minha Turma</a><br><br>
                        </div>
                        <div class="col">
                            <a href="{{ url('/mensagem/nova') }}" class="btn2 btn">Enviar Mensagem</a><br><br>
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
