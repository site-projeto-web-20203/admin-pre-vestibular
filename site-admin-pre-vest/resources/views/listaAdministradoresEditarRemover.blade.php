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
                <h3 align="center">Lista de Alunos</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            @foreach($administradores as $administrador)
                            <table class="table table-bordered", align="center", style="border-spacing: 0.5em">
                                <thead>
                                    <tr>
                                        <th>Nome Completo</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                        <th>Data de Nascimento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$administrador->nome}}</td>
                                        <td>{{$administrador->email}}</td>
                                        <td>{{$administrador->telefone}}</td>
                                        <td>{{$administrador->data_nascimento}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <a href="{{url('/editar/administrador/'.$administrador->id)}}" class="btn btn-primary">Editar</a>
                                </div>
                                <div class="col">
                                    <a href="{{url('/remover/administrador/'.$administrador->id)}}" class="btn btn-primary">Remover</a>
                                </div>
                            </div>
                            <br><br>
                            @endforeach
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
