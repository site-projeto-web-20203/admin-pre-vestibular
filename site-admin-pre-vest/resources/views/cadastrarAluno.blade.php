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
            <form method="POST" action="{{url('/cadastrar/aluno')}}">
                @csrf
                <div class="card justify-content-center">
                    <h3>Cadastrar Aluno</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="col-form-label text-md-right required">Nome Completo</label>
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label text-md-right required">E-mail</label>
                                <input id="email" type="email" placeholder="email@exemplo.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
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
                                <input id="telefone" type="tel" placeholder="(12) 34567-8901" pattern="[({1}][0-9]{2}[){1}] [0-9]{4,5}-[0-9]{4}" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{old('telefone')}}" required autofocus/>
                                <small>Formato: (12) 34567-8901</small>
                                @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="data_nascimento" class="col-form-label text-md-right required">Data de Nascimento</label>
                                <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{old('data_nascimento')}}" required autofocus/>
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
                                <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" value="{{old('rua')}}" required autofocus/>
                                @error('rua')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="bairro" class="col-form-label text-md-right required">Bairro</label>
                                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{old('bairro')}}" required autofocus/>
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
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{old('cidade')}}" required autofocus/>
                                @error('cidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="numero" class="col-form-label text-md-right required">Numero</label>
                                <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{old('numero')}}" required autofocus/>
                                @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="complemento" class="col-form-label text-md-right">Complemento</label>
                                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror"/>
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
                                <input id="escola" type="text" class="form-control @error('escola') is-invalid @enderror" name="escola" value="{{old('escola')}}" required autofocus/>
                                @error('escola')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="ano_conclusao" class="col-form-label text-md-right required">Ano de Conclusão (Ensino Médio)</label>
                                <input id="ano_conclusao" type="text" class="form-control @error('ano_conclusao') is-invalid @enderror" name="ano_conclusao" value="{{old('ano_conclusao')}}" required autofocus/>
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
                                <input id="nome_responsavel" type="text" class="form-control @error('nome_responsavel') is-invalid @enderror" name="nome_responsavel" value="{{old('nome_responsavel')}}" autofocus/>
                                @error('nome_responsavel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="telefone_responsavel" class="col-form-label text-md-right">Telefone do Responsável</label>
                                <input id="telefone_responsavel" type="tel" placeholder="(12) 34567-8901" pattern="[({1}][0-9]{2}[){1}] [0-9]{4,5}-[0-9]{4}" class="form-control @error('telefone_responsavel') is-invalid @enderror" name="telefone_responsavel" value="{{old('telefone_responsavel')}}" autofocus/>
                                <small>Formato: (12) 34567-8901</small>
                                @error('telefone_responsavel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-6">
                                <label for="email_responsavel" class="col-form-label text-md-right">E-mail do Responsável</label>
                                <input id="email_responsavel" type="email"  placeholder="email@exemplo.com" class="form-control @error('email_responsavel') is-invalid @enderror" name="email_responsavel" value="{{old('email_responsavel')}}" autofocus/>
                                @error('email_responsavel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-primary" value="Cadastrar" />
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
