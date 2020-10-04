<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
  </head>
  <body>
    <h1>Enviar Mensagem</h1>
    <form method="POST" action="{{url('/mensagem/nova')}}">
      @csrf
      <div class="form-group row">
        <label for="remetente" class="col-md-4 col-form-label text-md-right">Seu Nome</label>
        <div class="col-md-8">
          <input id="remetente" type="text" class="form-control @error('remetente') is-invalid @enderror" name="remetente" value="{{old('remetente')}}" required autofocus/>
          @error('remetente')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
        <label for="email" class="col-md-4 col-form-label text-md-right">Seu E-mail</label>
        <div class="col-md-8">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
         <br>
        <label for="conteudo" class="col-md-4 col-form-label text-md-right">Mensagem</label>
        <div class="col-md-8">
        <textarea id="conteudo" name="conteudo" rows="4" cols="50"></textarea>
          @error('conteudo')
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
