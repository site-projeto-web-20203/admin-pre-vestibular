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
            <br>
            <form method="POST" action="{{url('/remover/administrador/'.$administrador->id)}}">
                @csrf
                <div class="card" align="center">
                    <h3 align="center">Remover Professor</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="col-form-label text-md-right">Nome Completo</label>
                                <input id="nome" type="text" value="{{$administrador->nome}}" class="form-control" name="nome" readonly/>
                            </div>
                            <div class="col">
                                <label for="email" class="col-form-label text-md-right">E-mail</label>
                                <input id="email" type="text" value="{{$administrador->email}}" class="form-control" name="email" readonly/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="telefone" class="col-form-label text-md-right">Telefone</label>
                                <input id="telefone" type="text" value="{{$administrador->telefone}}" class="form-control" name="telefone" readonly/>
                            </div>
                            <div class="col">
                                <label for="data_nascimento" class="col-form-label text-md-right">Data de Nascimento</label>
                                <input id="data_nascimento" type="date" value="{{$administrador->data_nascimento}}" class="form-control" name="data_nascimento" readonly/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Remover" />
                </div>
            </form>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
