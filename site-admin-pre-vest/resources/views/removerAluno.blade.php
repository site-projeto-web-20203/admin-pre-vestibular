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
    <form method="POST" action="{{url('/remover/aluno/'.$aluno->id)}}">
        @csrf
        <div class="card" align="center">
            <h3 align="center">Remover Aluno</h3>
            <div class="container pt-3" align="left">
                <div class="row">
                    <div class="col">
                        <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                        <input id="nome" type="text" value="{{$aluno->nome}}" class="form-control" name="nome" readonly/>
                    </div>
                    <div class="col">
                        <label for="email" class="col-form-label text-md-right">E-mail</label>
                        <input id="email" type="text" value="{{$aluno->email}}" class="form-control" name="email" readonly/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="telefone" class="col-form-label text-md-right">Telefone</label>
                        <input id="telefone" type="text" value="{{$aluno->telefone}}" class="form-control" name="telefone" readonly/>
                    </div>
                    <div class="col">
                        <label for="data_nascimento" class="col-form-label text-md-right">Data de Nascimento</label>
                        <input id="data_nascimento" type="date" value="{{$aluno->data_nascimento}}" class="form-control" name="data_nascimento" readonly/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="fez_enem">Fez Enem?</label><br>
                        <input id="fez_enem" type="text" value="{{$aluno->fez_enem}}" class="form-control" name="fez_enem" readonly/>
                    </div>
                    <div class="col">
                        <label for="escola">Escola</label><br>
                        <input id="escola" type="text" value="{{$aluno->escola}}" class="form-control" name="escola" readonly/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="tipo_escola">Tipo de Escola</label><br>
                        <input id="tipo_escola" type="text" value="{{$aluno->tipo_escola}}" class="form-control" name="tipo_escola" readonly/>
                    </div>
                    <div class="col">
                        <label for="ano_conclusao">Ano de Conclusão</label><br>
                        <input id="ano_conclusao" type="text" value="{{$aluno->ano_conclusao}}" class="form-control" name="ano_conclusao" readonly/>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="nome_responsavel">Nome do Responsável</label><br>
                    <input id="nome_responsavel" type="text" value="{{$aluno->nome_responsavel}}" class="form-control" name="nome_responsavel" readonly/>
                </div>
                <div class="col">
                    <label for="email_responsabel">E-mail do Responsável</label><br>
                    <input id="email_responsabel" type="text" value="{{$aluno->email_responsabel}}" class="form-control" name="email_responsabel" readonly/>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="telefone_resposavel">Telefone do Responsável</label><br>
                    <input id="telefone_resposavel" type="text" value="{{$aluno->telefone_resposavel}}" class="form-control" name="telefone_resposavel" readonly/>
                </div>
                <div class="col">
                    <label for="cidade">Cidade</label><br>
                    <input id="cidade" type="text" value="{{$aluno->cidade}}" class="form-control" name="cidade" readonly/>
                </div>
            </div>
        </div>
        <br>
            <input type="submit" class="btn btn-primary" value="Remover"/>
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
