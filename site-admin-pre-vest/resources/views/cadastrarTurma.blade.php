<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastrar Turma</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <h1 align="center">Cadastrar Turma</h1>
    </head>
    <body>
        <div class="card-body">
            <form method="POST" action="{{ url('/cadastrar/turma') }}">
                @csrf
                <div class="form-group row">
                    <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
                    <div class=" col-md-8">
                        <input id="nome" type="text" class="form control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <br>
                    <label for="dataInicio" class="col-md-4 col-form-label text-md-right">Data de Início da Turma</label>
                    <div class="col-md-8">
                        <input id="dataInicio" type="date" class="form-control @error('dataInicio') is-invalid @enderror" name="dataInicio" value="{{old('dataInicio')}}" required autofocs/>
                        @error('dataInicio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <label for="dataFim" class="col-md-4 col-form-label text-md-right">Data de Encerramento da Turma</label>
                    <div class="col-md-8">
                        <input id="dataFim" type="date" class="form-control @error('dataFim') is-invalid @enderror" name="dataFim" value="{{old('dataFim')}}" required autofocs/>
                        @error('dataFim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <label for="horario" class="col-md-4 col-form-label text-md-right">Horário de Aula</label>
                    <div class="col-md-8">
                        <input id="horario" type="text" class="form-control @error('horario') is-invalid @enderror" name="horario" value="{{old('dataFim')}}" required autofocs/>
                        @error('horario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <input type="submit" value="Cadastrar" />
                </div>
            </form>
        </div>
    </body>
</html>
