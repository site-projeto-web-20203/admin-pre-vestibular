<!doctype html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container" align="center">
            <header class="row">
                @include('includes.header')
            </header>
            <form method="POST" action="{{url('/editar/administrador/'.$administrador->id)}}">
                @csrf
                <div class="card" align="center">
                    <h3 align="center">Editar Administrador</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                                <input id="nome" type="text" value="{{$administrador->nome}}" class="form-control @error('nome') is-invalid @enderror" name="nome" required autofocus/>
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label text-md-right">E-mail</label>
                                <input id="email" type="hidden" name="email" value="{{$administrador->email}}"/>
                                <input id="email" type="text" name="aaa" value="{{$administrador->email}}" class="form-control @error('email') is-invalid @enderror" readonly/>
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
                                <input id="telefone" type="text" value="{{$administrador->telefone}}" class="form-control @error('telefone') is-invalid @enderror" name="telefone" required autofocus/>
                                @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="data_nascimento" class="col-form-label text-md-right">Data de Nascimento</label>
                                <input id="data_nascimento" type="date" value="{{$administrador->data_nascimento}}" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" required autofocus/>
                                @error('data_nascimento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="password" class="col-form-label text-md-right">Senha</label>
                                <input id="password" type="password" value="{{$administrador->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus/>
                                @error('password')
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
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
