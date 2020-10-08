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
    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Cadastrar') }}</div>
    <h1 align="center">Cadastrar Administrador</h1>
    @isset($url)
        <form method="POST" action="{{ url("/cadastrar/administrador") }}" aria-label={{ __('Cadastrar') }}">
    @else
        <form method="POST" action="{{ url("/cadastrar/administrador") }}" aria-label={{ __('Cadastrar') }}">
    @endisset
      @csrf
      <div class="container pt-3">
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
          <input type="submit" value="Cadastrar" />
      </div>
    </form>
  </body>
</html>
