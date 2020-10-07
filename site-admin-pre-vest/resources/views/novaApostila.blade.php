<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1 align="center">Nova Apostila</h1>
    <form method="POST" action="{{url('/cadastrar/apostila')}}">
      @csrf
      <div class="container pt-3">
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
        <input type="submit" value="Enviar"/>
      </div>
    </form>
  </body>
</html>
