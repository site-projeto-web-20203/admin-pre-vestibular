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
                <h3>Lista de Turmas</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless justify-content-center">
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
                                            <td>{{Carbon\Carbon::parse($turma->dataInicio)->format('d/m/Y')}}</td>
                                            <td>{{Carbon\Carbon::parse($turma->dataFim)->format('d/m/Y')}}</td>
                                            <td>{{$turma->horarioInicio}} - {{$turma->horarioFim}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
