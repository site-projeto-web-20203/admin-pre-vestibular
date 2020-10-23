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
                <h3 align="center">Perfil de Aluno</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
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
                                        <td>
                                            @if($aluno->tipo_escola == true){{'Pública'}}
                                            @else{{'Particular'}}
                                            @endif
                                        </td>
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
                                <thead>
                                    <tr>
                                        <th>Bairro</th>
                                        <th>Rua</th>
                                        <th>Número</th>
                                        <th>Complemento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$aluno->bairro}}</td>
                                        <td>{{$aluno->rua}}</td>
                                        <td>{{$aluno->numero}}</td>
                                        <td>{{$aluno->complemento}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/editar/aluno/'.$aluno->id)}}" class="btn btn-primary">Editar Dados</a>
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
