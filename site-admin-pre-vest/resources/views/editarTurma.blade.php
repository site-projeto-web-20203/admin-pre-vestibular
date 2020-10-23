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
            <form method="POST" action="{{url('/editar/turma/'.$turma->id)}}">
                @csrf
                <div class="card justify-content-center">
                    <h3>Editar Turma</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                                <input id="nome" type="text" value="{{$turma->nome}}" class="form-control @error('nome') is-invalid @enderror" name="nome" required autofocus/>
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="dataInicio" class="col-form-label text-md-right">Data de Início da Turma</label>
                                <input id="dataInicio" type="date" value="{{$turma->dataInicio}}" class="form-control @error('dataInicio') is-invalid @enderror" name="dataInicio" required autofocus/>
                                @error('dataInicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="dataFim" class="col-form-label text-md-right">Data de Encerramento da Turma</label>
                                <input id="dataFim" type="date" value="{{$turma->dataFim}}" class="form-control @error('dataFim') is-invalid @enderror" name="dataFim" required autofocus/>
                                @error('dataFim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="horarioInicio" class="col-form-label text-md-right">Horário de Aula (Início)</label>
                                <input id="horarioInicio" type="time" min="06:00" max="23:00" value="{{$turma->horarioInicio}}" class="form-control @error('horarioInicio') is-invalid @enderror" name="horarioInicio" required autofocus/>
                                @error('horarioInicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="horarioFim" class="col-form-label text-md-right">Horário de Aula (Final)</label>
                                <input id="horarioFim" type="time" min="06:00" max="23:00" value="{{$turma->horarioFim}}" class="form-control @error('horarioFim') is-invalid @enderror" name="horarioFim" required autofocus/>
                                @error('horarioFim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-primary" value="Atualizar"/>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <h3>Alunos sem Turma</h3>
                <br>
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless justify-content-center" style="border-spacing: 0.5em">
                            <thead>
                            <tr>
                                <th>Nome Completo</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alunos as $aluno)
                                <form method="POST" action="{{url('/editar/turmaaluno/'.$aluno->id)}}">
                                    @csrf
                                    <tr>
                                        <td>{{$aluno->nome}}</td>
                                        <td>{{$aluno->email}}</td>
                                        <td>{{$aluno->telefone}}</td>
                                        <input id="'turma_id'" type="number" value="{{$turma->id}}" class="form-control" name="turma_id" hidden/>
                                        <td><a href="{{url('/admin/visualizar/aluno/'.$aluno->id)}}" class="btn btn-primary">Visualizar</a></td>
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
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
