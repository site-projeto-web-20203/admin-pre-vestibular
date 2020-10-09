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
            <form method="POST" action="{{url('/cadastrar/professor')}}">
                @csrf
                <div class="card" align="center">
                    <h3 align="center">Cadastrar Professor</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label text-md-right">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
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
                                <label for="telefone" class="col-form-label text-md-right">Telefone</label>
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{old('telefone')}}" required autofocus/>
                                @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="data_nascimento" class="col-form-label text-md-right">Data de Nascimento</label>
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
                                <label for="ehVoluntario">Você é Voluntário?</label><br>
                                <select name="ehVoluntario" id="ehVoluntario">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                                @error('ehVoluntario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="grauInstrucao">Grau de Instrução</label><br>
                                <select name="grauInstrucao" id="grauInstrucao">
                                    <option value="Estudante de Graduação">Estudante de Graduação</option>
                                    <option value="Graduação">Graduação</option>
                                    <option value="Pós Graduação">Pós Graduação</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="Doutorado">Doutorado</option>
                                </select>
                                @error('grauInstrucao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <?php
                        if (isset($_POST['disponibilidade'])) {
                            $disponibilidade = implode(', ', $_POST['disponibilidade']);
                        } else {
                            $disponibilidade = "";
                        }
                        if (isset($_POST['areasAtuacao'])) {
                            $areasAtuacao = implode(', ', $_POST['areasAtuacao']);
                        } else {
                            $areasAtuacao = "";
                        }
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <label>Áreas de atuação</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox" name="areasAtuacao[]" id="biologia" value="Biologia" /> Biologia<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="espanhol" value="Espanhol" /> Espanhol<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="filosofia" value="Filosofia" /> Filosofia<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="fisica" value="Física" /> Física<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="geografia" value="Geografia" /> Geografia<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="historia" value="História" /> História<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="ingles" value="Inglês" /> Inglês<br>
                                        </div>
                                        <div class="col">
                                            <input type="checkbox" name="areasAtuacao[]" id="literatura" value="Literatura" /> Literatura<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="matematica" value="Matemática" /> Matemática<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="portugues" value="Português" /> Português<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="quimica" value="Química" /> Química<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="redacao" value="Redação" /> Redação<br>
                                            <input type="checkbox" name="areasAtuacao[]" id="sociologia" value="Sociologia" /> Sociologia<br>
                                        </div>
                                        @error('areasAtuacao')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Disponibilidade</label>
                                    <div class="container">
                                        <input type="checkbox" name="disponibilidade[]" id="manha" value="Manhã" /> Manhã<br>
                                        <input type="checkbox" name="disponibilidade[]" id="tarde" value="Tarde" /> Tarde<br>
                                        <input type="checkbox" name="disponibilidade[]" id="noite" value="Noite" /> Noite<br>
                                    </div>
                                    @error('disponibilidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" />
                </div>
            </form>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
