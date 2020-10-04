<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
  </head>
  <body>
    <h1>Enviar Apostila</h1>
    <form method="POST" action="{{url('/apostila/nova')}}">
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
        <label for="nome_arq" class="col-md-4 col-form-label text-md-right">Nome do Arquivo</label>
        <div class="col-md-8">
          <input id="nome_arq" type="nome_arq" class="form-control @error('nome_arq') is-invalid @enderror" name="nome_arq" value="{{old('nome_arq')}}" required autofocus/>
          @error('nome_arq')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
         <br>
         <input type="file" id="arquivo" name="nome">
         <br><br>
        <input type="submit" value="Enviar" />
      </div>
    </form>
  </body>
</html>
