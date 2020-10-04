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
          <label>Disponibilidade</label>
          <div class="col-md-8">
              <input type="hidden" name="dispoManha" id="dispoManhaHidden" value="null"/>
              <input type="checkbox" name="dispoManha" id="dispoManha" value="yes" />Manhã
              <input type="checkbox" name="dispoTarde" id="dispoTarde" value="yes" />Tarde
              <input type="checkbox" name="dispoNoite" id="dispoNoite" value="yes" />Noite
          </div>
          <br>
          <label>Áreas de atuação</label>
          <div class="col-md-8">
              <input type="checkbox" name="atuaBiologia" id="atuaBiologia" value="yes" />Biologia
              <input type="checkbox" name="atuaEspanhol" id="atuaEspanhol" value="yes" />Espanhol
              <input type="checkbox" name="atuaFilosofia" id="atuaFilosofia" value="yes" />Filosofia
              <br>
              <input type="checkbox" name="atuaFisica" id="atuaFisica" value="yes" />Fisica
              <input type="checkbox" name="atuaGeografia" id="atuaGeografia" value="yes" />Geografia
              <input type="checkbox" name="atuaHistoria" id="atuaHistoria" value="yes" />História
              <br>
              <input type="checkbox" name="atuaIngles" id="atuaIngles" value="yes" />Inglês
              <input type="checkbox" name="atuaLiteratura" id="atuaLiteratura" value="yes" />Literatura
              <input type="checkbox" name="atuaMatematica" id="atuaMatematica" value="yes" />Matematica
              <br>
              <input type="checkbox" name="atuaPortugues" id="atuaPortugues" value="yes" />Português
              <input type="checkbox" name="atuaQuimica" id="atuaQuimica" value="yes" />Quimica
              <input type="checkbox" name="atuaRedacao" id="atuaRedacao" value="yes" />Redação
              <input type="checkbox" name="atuaSociologia" id="atuaSociologia" value="yes" />Sociologia
          </div>
        <br>
        <input type="submit" value="Cadastrar" />
      </div>
    </form>
  </body>
</html>
