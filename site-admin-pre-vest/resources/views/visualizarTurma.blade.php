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
        <h3 align="center">Perfil da Turma</h3>
        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered", align="center", style="border-spacing: 0.5em">
                        <thead>
                        <tr>
                            <th>Nome da Turma</th>
                            <th>Data de Início</th>
                            <th>Data de Término</th>
                            <th>Horário</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$turma->nome}}</td>
                            <td>{{Carbon\Carbon::parse($turma->dataInicio)->format('d/m/Y')}}</td>
                            <td>{{Carbon\Carbon::parse($turma->dataFim)->format('d/m/Y')}}</td>
                            <td>{{$turma->horarioInicio}} - {{$turma->horarioFim}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{url('/editar/turma/'.$turma->id)}}" class="btn btn-primary">Editar Dados</a>
                </div>
                <div class="col">
                    <a href="{{url('/remover/turma/'.$turma->id)}}" class="btn btn-primary">Remover</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid p-0" align="center">
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
