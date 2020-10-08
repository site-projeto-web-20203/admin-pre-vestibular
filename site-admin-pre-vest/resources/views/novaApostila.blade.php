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
            <br>
            <h1 align="center">Nova Apostila</h1>
            <br>
            <form method="POST" action="{{url('/cadastrar/apostila')}}">
                @csrf
                <div class="container pt-3" align="left">
                    <div class="row">
                        <div class="col">
                            <label for="disciplina" class="col-form-label text-md-right">Disciplina</label><br>
                            <select name="disciplina" id="disciplina">
                                <option value="Biologia">Biologia</option>
                                <option value="Espanhol">Espanhol</option>
                                <option value="Filosofia">Filosofia</option>
                                <option value="Física">Física</option>
                                <option value="Geografia">Geografia</option>
                                <option value="História">História</option>
                                <option value="Inglês">Inglês</option>
                                <option value="Literatura">Literatura</option>
                                <option value="Matemática">Matemática</option>
                                <option value="Português">Português</option>
                                <option value="Química">Química</option>
                                <option value="Redação">Redação</option>
                                <option value="Sociologia">Sociologia</option>
                            </select>
                            @error('disciplina')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="arq" class="col-form-label text-md-right">Arquivo</label>
                            <input type="file" id="arq" name="arq" class="form-control-file @error('arq') is-invalid @enderror">
                            @error('arq')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                </div>
                <input type="submit" class="btn btn-primary" value="Enviar" />
            </form>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
