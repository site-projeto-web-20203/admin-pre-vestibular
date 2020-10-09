<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container" align="center">
            <header class="row">
                @include('includes.header')
            </header>
            <div class="card" align="center">
                <div class="container pt-3">
                    <a>Você não tem permissão para acessar essa página!</a>
                </div>
            </div>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
