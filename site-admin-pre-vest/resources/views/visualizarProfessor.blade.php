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
                <h3 align="center">Perfil de Professor</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered" align="center">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/editar/professor/'.$professor->id)}}" class="btn btn-primary">Editar Dados</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>

