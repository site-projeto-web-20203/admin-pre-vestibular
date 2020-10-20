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
    <form method="POST" action="{{url('/remover/turma/'.$turma->id)}}">
        @csrf
        <div class="card" align="center">
            <h3 align="center">Remover Turma</h3>
            <div class="container pt-3" align="left">
                <div class="row">
                    <div class="col">
                        <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                        <input id="nome" type="text" value="{{$turma->nome}}" class="form-control" name="nome" readonly/>
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
                        <input id="dataInicio" type="date" value="{{$turma->dataInicio}}" class="form-control" name="dataInicio" readonly/>
                        @error('dataInicio')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="dataFim" class="col-form-label text-md-right">Data de Encerramento da Turma</label>
                        <input id="dataFim" type="date" value="{{$turma->dataFim}}" class="form-control" name="dataFim" readonly/>
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
                        <input id="horarioInicio" type="time" min="06:00" max="23:00" value="{{$turma->horarioInicio}}" class="form-control" name="horarioInicio" readonly/>
                        @error('horarioInicio')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="horarioFim" class="col-form-label text-md-right">Horário de Aula (Final)</label>
                        <input id="horarioFim" type="time" min="06:00" max="23:00" value="{{$turma->horarioFim}}" class="form-control" name="horarioFim" readonly/>
                        @error('horarioFim')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Remover" />
        </div>
    </form>
</div>
<br>
<div class="container-fluid p-0" align="center">
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
