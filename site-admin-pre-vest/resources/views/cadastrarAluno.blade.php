<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastrar Aluno</title>

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
    <form method="POST" action="{{ route('aluno.create') }}">
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
            <label for="rua" class="col-md-4 col-form-label text-md-right">Rua</label>
            <div class="col-md-8">
                <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{old('rua')}}" required autofocs/>
                @error('rua')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="bairro" class="col-md-4 col-form-label text-md-right">Bairro</label>
            <div class="col-md-8">
                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{old('bairro')}}" required autofocs/>
                @error('bairro')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="complemento" class="col-md-4 col-form-label text-md-right">Complemento</label>
            <div class="col-md-8">
                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror"/>
                @error('complemento')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade</label>
            <div class="col-md-8">
                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{old('cidade')}}" required autofocs/>
                @error('cidade')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="numero" class="col-md-4 col-form-label text-md-right">Numero</label>
            <div class="col-md-8">
                <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{old('numero')}}" required autofocs/>
                @error('numero')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="escola" class="col-md-4 col-form-label text-md-right">Escola</label>
            <div class="col-md-8">
                <input id="escola" type="text" class="form-control @error('escola') is-invalid @enderror" name="escola" value="{{old('escola')}}" required autofocs/>
                @error('escola')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="ano_conclusao" class="col-md-4 col-form-label text-md-right">Ano de Conclusão</label>
            <div class="col-md-8">
                <input id="ano_conclusao" type="text" class="form-control @error('ano_conclusao') is-invalid @enderror" name="ano_conclusao" value="{{old('ano_conclusao')}}" required autofocs/>
                @error('ano_conclusao')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="tipo_escola">Tipo de Escola</label>
            <div class="col-md-8">
                <select name="tipo_escola" id="tipo_escola">
                    <option value="Pública">Pública</option>
                    <option value="Privada">Privada</option>
                </select>
                @error('tipo_escola')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <br>
            <label for="fez_enem">Fez Enem?</label>
            <div class="col-md-8">
                <select name="fez_enem" id="fez_enem">
                    <option value="Sim">Sim</option>
                    <option value="Não">não</option>
                </select>
                @error('fez_enem')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <br>
            <label for="nome_responsavel" class="col-md-4 col-form-label text-md-right">Nome do Responsável</label>
            <div class="col-md-8">
                <input id="nome_responsavel" type="text" class="form-control @error('nome_responsavel') is-invalid @enderror"/>
                @error('nome_responsavel')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="telefone_responsavel" class="col-md-4 col-form-label text-md-right">Telefone do Responsável</label>
            <div class="col-md-8">
                <input id="telefone_responsavel" type="text" class="form-control @error('telefone_responsavel') is-invalid @enderror"/>
                @error('telefone_responsavel')
                <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                @enderror
            </div>
            <br>
            <label for="email_responsavel" class="col-md-4 col-form-label text-md-right">E-mail do Responsável</label>
            <div class="col-md-8">
                <input id="email_responsavel" type="email" class="form-control @error('email_responsavel') is-invalid @enderror"/>
                @error('email_responsavel')
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
