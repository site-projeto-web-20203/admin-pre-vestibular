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
                <div class="container pt-3">
                    <h3>Sua inscrição foi realizada com sucesso!</h3>
                    <br>
                    <a href="{{ url('/') }}" class="btn btn">Voltar ao Início</a>
                </div>
            </div>
        </div>
        <br>
        @include('includes.faleConosco')
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
