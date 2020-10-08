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
            <br>
            <h1 align="center">Lista de Administradores</h1>
            <br>
            <div class="container pt-3">
                <div class="row">
                    <div class="col">
                        <table class="table table-striped", align="center", style="border-spacing: 0.5em">
                            <thead>
                                <tr>
                                    <th>Nome Completo</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Data de Nascimento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($administradores as $administrador)
                                    <tr>
                                        <td>{{$administrador->nome}}</td>
                                        <td>{{$administrador->email}}</td>
                                        <td>{{$administrador->telefone}}</td>
                                        <td>{{$administrador->data_nascimento}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
