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
            <form method="POST" action="{{url('/cadastrar/turma')}}">
                @csrf
                <div class="card" align="center">
                    <h3 align="center">Cadastrar Turma</h3>
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
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="dataInicio" class="col-form-label text-md-right">Data de Início da Turma</label>
                                <input id="dataInicio" type="date" class="form-control @error('dataInicio') is-invalid @enderror" name="dataInicio" value="{{old('dataInicio')}}" required autofocus/>
                                @error('dataInicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="dataFim" class="col-form-label text-md-right">Data de Encerramento da Turma</label>
                                <input id="dataFim" type="date" class="form-control @error('dataFim') is-invalid @enderror" name="dataFim" value="{{old('dataFim')}}" required autofocus/>
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
                                <input id="horarioInicio" type="time" min="06:00" max="23:00" class="form-control @error('horarioInicio') is-invalid @enderror" name="horarioInicio" value="{{old('horarioInicio')}}" required autofocus/>
                                @error('horarioInicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="horarioFim" class="col-form-label text-md-right">Horário de Aula (Final)</label>
                                <input id="horarioFim" type="time" min="06:00" max="23:00" class="form-control @error('horarioFim') is-invalid @enderror" name="horarioFim" value="{{old('horarioFim')}}" required autofocus/>
                                @error('horarioFim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" />
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
