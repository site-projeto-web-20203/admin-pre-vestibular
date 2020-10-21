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
                    <h3 align="center">Alunos da Turma</h3>
                    <div class="row">
                        <div class="col">
                            @foreach($alunos as $aluno)
                                <form method="POST" action="{{url('/remover/turmaaluno/'.$aluno->id)}}">
                                @csrf
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
                                            <td>{{$aluno->nome}}</td>
                                            <td>{{$aluno->email}}</td>
                                            <td>{{$aluno->telefone}}</td>
                                            <td>{{Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y')}}</td>
                                        </tr>
                                        </tbody>
                                        <thead>
                                        <tr>
                                            <th>Já Fez ENEM?</th>
                                            <th>Nome da Escola</th>
                                            <th>Tipo de Escola</th>
                                            <th>Ano de Conclusão do EM</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$aluno->fez_enem}}</td>
                                            <td>{{$aluno->escola}}</td>
                                            <td>{{$aluno->tipo_escola}}</td>                                            </td>
                                            <td>{{$aluno->ano_conclusao}}</td>
                                        </tr>
                                        </tbody>
                                        <thead>
                                        <tr>
                                            <th>Nome do Responsável</th>
                                            <th>E-mail do Responsável</th>
                                            <th>Telefone do Responsável</th>
                                            <th>Cidade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$aluno->nome_responsavel}}</td>
                                            <td>{{$aluno->email_responsavel}}</td>
                                            <td>{{$aluno->telefone_responsavel}}</td>
                                            <td>{{$aluno->cidade}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <input type="submit" class="btn btn-primary" value="Remover" />
                                    <br><br>
                                </form>
                            @endforeach
                        </div>
                    </div>
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
