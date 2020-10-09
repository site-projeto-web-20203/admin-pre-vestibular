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
        <h3 align="center">Lista de Administradores</h3>
        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    <table class="table table-borderless", align="center", style="border-spacing: 0.5em">
                        <thead>
                        <tr>
                            <th>Nome Completo</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$administrador->nome}}</td>
                            <td>{{$administrador->email}}</td>
                            <td>{{$administrador->telefone}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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