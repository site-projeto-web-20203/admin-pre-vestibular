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
    <form method="POST" action="{{url('/editar/aluno/'.$aluno->id)}}">
        @csrf
        <div class="card" align="center">
            <h3 align="center">Editar Aluno</h3>
            <div class="container pt-3" align="left">
                <div class="row">
                    <div class="col">
                        <label for="nome" class="col-form-label text-md-right required">Nome Completo</label>
                        <input id="nome" type="text" value="{{$aluno->nome}}" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="col-form-label text-md-right">E-mail</label>
                        <input id="email" type="hidden" name="email" value="{{$aluno->email}}"/>
                        <input id="email" type="text" name="aaa" value="{{$aluno->email}}" class="form-control @error('email') is-invalid @enderror" readonly/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="telefone" class="col-form-label text-md-right required">Telefone</label>
                        <input id="telefone" type="text" value="{{$aluno->telefone}}" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{old('telefone')}}" required autofocus/>
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="data_nascimento" class="col-form-label text-md-right required">Data de Nascimento</label>
                        <input id="data_nascimento" type="date" value="{{$aluno->data_nascimento}}" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{old('data_nascimento')}}" required autofocus/>
                        @error('data_nascimento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="rua" class="col-form-label text-md-right required">Rua</label>
                        <input id="rua" type="text" value="{{$aluno->rua}}" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{old('rua')}}" required autofocus/>
                        @error('rua')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="bairro" class="col-form-label text-md-right required">Bairro</label>
                        <input id="bairro" type="text" value="{{$aluno->bairro}}" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{old('bairro')}}" required autofocs/>
                        @error('bairro')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="cidade" class="col-form-label text-md-right required">Cidade</label>
                        <input id="cidade" type="text" value="{{$aluno->cidade}}" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{old('cidade')}}" required autofocs/>
                        @error('cidade')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="numero" class="col-form-label text-md-right required">Numero</label>
                        <input id="numero" type="text" value="{{$aluno->numero}}" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{old('numero')}}" required autofocs/>
                        @error('numero')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="complemento" class="col-form-label text-md-right">Complemento</label>
                        <input id="complemento" type="text" value="{{$aluno->complemento}}" class="form-control @error('complemento') is-invalid @enderror"/>
                        @error('complemento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="escola" class="col-form-label text-md-right required">Escola (Ensino Médio)</label>
                        <input id="escola" type="text" value="{{$aluno->escola}}" class="form-control @error('escola') is-invalid @enderror" name="escola" value="{{old('escola')}}" required autofocs/>
                        @error('escola')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="ano_conclusao" class="col-form-label text-md-right required">Ano de Conclusão (Ensino Médio)</label>
                        <input id="ano_conclusao" type="text" value="{{$aluno->ano_conclusao}}" class="form-control @error('ano_conclusao') is-invalid @enderror" name="ano_conclusao" value="{{old('ano_conclusao')}}" required autofocs/>
                        @error('ano_conclusao')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="tipo_escola" class="required">Tipo de Escola</label><br>
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
                    <div class="col">
                        <label for="fez_enem" class="required">Já Fez Enem?</label><br>
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
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="nome_responsavel" class="col-form-label text-md-right">Nome do Responsável</label>
                        <input id="nome_responsavel" type="text" value="{{$aluno->nome_responsavel}}" class="form-control @error('nome_responsavel') is-invalid @enderror"/>
                        @error('nome_responsavel')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="telefone_responsavel" class="col-form-label text-md-right">Telefone do Responsável</label>
                        <input id="telefone_responsavel" type="text" value="{{$aluno->telefone_responsavel}}" class="form-control @error('telefone_responsavel') is-invalid @enderror"/>
                        @error('telefone_responsavel')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col col-md-6">
                        <label for="email_responsavel" class="col-form-label text-md-right">E-mail do Responsável</label>
                        <input id="email_responsavel" type="email" value="{{$aluno->email_responsavel}}" class="form-control @error('email_responsavel') is-invalid @enderror"/>
                        @error('email_responsavel')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar" />
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
