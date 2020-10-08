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
            <h1 align="center">Cadastrar Turma</h1>
            <br>
            <form method="POST" action="{{url('/cadastrar/turma')}}">
                @csrf
                <div class="container pt-3" align="left">
                    <div class="row">
                        <div class="col">
                            <label for="nome" class="col-form-label text-md-right">Nome da Turma</label>
                            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                            @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="dataInicio" class="col-form-label text-md-right">Data de Início da Turma</label>
                            <input id="dataInicio" type="date" class="form-control @error('dataInicio') is-invalid @enderror" name="dataInicio" value="{{old('dataInicio')}}" required autofocus/>
                            @error('dataInicio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="dataFim" class="col-form-label text-md-right">Data de Encerramento da Turma</label>
                            <input id="dataFim" type="date" class="form-control @error('dataFim') is-invalid @enderror" name="dataFim" value="{{old('dataFim')}}" required autofocs/>
                            @error('dataFim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="horario" class="col-form-label text-md-right">Horário de Aula</label>
                            <input id="horario" type="text" class="form-control @error('horario') is-invalid @enderror" name="horario" value="{{old('dataFim')}}" required autofocs/>
                            @error('horario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Cadastrar" />
                </div>
            </form>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
