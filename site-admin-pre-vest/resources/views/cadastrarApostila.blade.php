<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
  </head>
  <body>
    <h1>Cadastrar Apostila</h1>
    <form method="POST" action="{{route('apostila.create')}}">
      @csrf
      <div class="form-group row">
        <label for="disciplina" class="col-md-4 col-form-label text-md-right">Disciplina</label>
        <div class="col-md-8">
          <input id="disciplina" type="text" class="form-control @error('disciplina') is-invalid @enderror" name="disciplina" value="{{old('disciplina')}}" required autofocus/>
          @error('disciplina')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
        <label for="arq" class="col-md-4 col-form-label text-md-right">Arquivo</label>
        <div class="col-md-8">
            <input type="file" id="arq" name="arq" class="form-control-file @error('arq') is-invalid @enderror">
          @error('arq')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
         <br>
        <input type="submit" value="Enviar" />
      </div>
    </form>
  </body>
</html>
