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
                <div class="container pt-3">
                    <h3>Apostila Removida!</h3>
                    <br>
                    <a href="{{ url('/listar/apostilas') }}" class="btn btn2">Voltar às Apostilas</a>
                </div>
            </div>
        </div>
        <br>
        @include('includes.faleConosco')
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
