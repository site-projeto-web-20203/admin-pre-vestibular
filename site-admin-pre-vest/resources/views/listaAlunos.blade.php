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
                <h3>Lista de Alunos</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            @foreach($alunos as $aluno)
                                <table class="table table-bordered justify-content-center" style="border-spacing: 0.5em">
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
                                            <td>{{$aluno->tipo_escola}}</td>
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
                                <br><br>
                            @endforeach
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
