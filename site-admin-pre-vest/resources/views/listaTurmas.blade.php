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
            <h1 align="center">Lista de Turmas</h1>
            <br>
            <div class="container pt-3">
                <div class="row">
                    <div class="col">
                        <table class="table table-striped", align="center", style="border-spacing: 0.5em">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Data de Início</th>
                                    <th>Data de Término</th>
                                    <th>Horário</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($turmas as $turma)
                                    <tr>
                                        <td>{{$turma->nome}}</td>
                                        <td>{{$turma->dataInicio}}</td>
                                        <td>{{$turma->dataFim}}</td>
                                        <td>{{$turma->horario}}</td>
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
