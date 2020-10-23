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
                <h3>Detalhes da Turma</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered" align="center" style="border-spacing: 0.5em">
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
                </div>
            </div>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <h3>Professores que Não Estão na Turma</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless justify-content-center">
                                <thead>
                                <tr>
                                    <th>Nome Completo</th>
                                    <th>E-mail</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($professores as $professor)
                                    <form method="POST" action="{{url('/adicionar/turmaprofessor/'.$professor->id.'/'.$turma->id)}}">
                                        @csrf
                                        <tr>
                                            <td>{{$professor->nome}}</td>
                                            <td>{{$professor->email}}</td>
                                            <td><a href="{{url('/admin/visualizar/professor/'.$professor->id)}}" class="btn btn-primary">Visualizar</a></td>
                                            <td><input type="submit" class="btn btn-primary" value="Adicionar" /></td>
                                        </tr>
                                    </form>
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
