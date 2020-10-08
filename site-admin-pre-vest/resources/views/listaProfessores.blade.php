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
            <div class="card" align="center">
                <h3 align="center">Lista de Professores</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            @foreach($professores as $professor)
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
                                            <td>{{$professor->nome}}</td>
                                            <td>{{$professor->email}}</td>
                                            <td>{{$professor->telefone}}</td>
                                            <td>{{$professor->data_nascimento}}</td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Voluntário?</th>
                                            <th>Grau de Instrução</th>
                                            <th>Disponibilidade</th>
                                            <th>Áreas de Atuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$professor->ehVoluntario}}</td>
                                            <td>{{$professor->grauInstrucao}}</td>
                                            <td>{{$professor->disponibilidade}}</td>
                                            <td>{{$professor->areasAtuacao}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
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
