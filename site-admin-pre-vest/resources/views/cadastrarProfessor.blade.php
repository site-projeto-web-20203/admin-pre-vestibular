<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
  </head>
  <body>
    <h1>Cadastrar Professor</h1>
    <form method="POST" action="{{url('/cadastrar/professor')}}">
      @csrf
      <div class="form-group row">
        <label for="nome" class="col-md-4 col-form-label text-md-right">Nome Completo</label>
        <div class="col-md-8">
          <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
          @error('nome')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
        <div class="col-md-8">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
         <br>
        <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
        <div class="col-md-8">
          <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{old('telefone')}}" required autofocus/>
          @error('telefone')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
         <br>
        <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>
        <div class="col-md-8">
          <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{old('data_nascimento')}}" required autofocus/>
          @error('data_nascimento')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
        <label for="ehVoluntario">Você é Voluntário?</label>
        <div class="col-md-8">
          <select name="ehVoluntario" id="ehVoluntario">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
          @error('ehVoluntario')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
	    <label for="grauInstrucao">Grau de Instrução</label>
        <div class="col-md-8">
          <select name="grauInstrucao" id="grauInstrucao">
            <option value="estudanteGraduacao">Estudante de Graduação</option>
            <option value="graduacao">Graduação</option>
            <option value="posGraduacao">Pós Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
          </select>
          @error('grauInstrucao')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <br>
        <input type="submit" value="Cadastrar" />
      </div>
    </form>
  </body>
</html>
