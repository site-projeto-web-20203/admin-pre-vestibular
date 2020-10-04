<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastrar Administrador</title>

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
        <h1 align="center">Cadastrar Administrador</h1>
    </head>
    <body>
        <div class="card-body">
            <form method="POST" action="{{ route('administrador.cadastrar') }}">
                @csrf
                <div class="form-group row">
                    <label for="nome" class="col-md-4 col-form-label text-md-right">Nome Completo</label>
                    <div class=" col-md-8">
                        <input id="nome" type="text" class="form control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <br>
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <br>
                    <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
                    <div class="col-md-8">
                        <input id="telefone" type="text" class="form control @error('telefone') is-invalid @enderror" name="telefone" value="{{old('telefone')}}" required autofocus/>
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <br>
                    <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>
                    <div class="col-md-8">
                        <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{old('data_nascimento')}}" required autofocs/>
                        @error('data_nascimento')
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
