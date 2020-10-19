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
            <form method="POST" action="{{url('/remover/apostila/'.$apostila->id)}}">
                @csrf
                <div class="card" align="center">
                    <h3 align="center">Remover Apostila</h3>
                    <div class="container pt-3" align="left">
                        <div class="row">
                            <div class="col">
                                <label for="nome_arq" class="col-form-label text-md-right">Nome do Arquivo</label>
                                <input id="nome_arq" type="text" value="{{$apostila->nome_arq}}" class="form-control" name="nome_arq" readonly/>
                            </div>
                            <div class="col">
                                <label for="disciplina" class="col-form-label text-md-right">Disciplina</label>
                                <input id="disciplina" type="text" value="{{$apostila->disciplina}}" class="form-control" name="disciplina" readonly/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="created_at" class="col-form-label text-md-right">Enviado Em</label>
                                <input id="created_at" type="text" value="{{Carbon\Carbon::parse($apostila->created_at)->format('d/m/Y - H:i')}}" class="form-control" name="created_at" readonly/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Remover" />
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
