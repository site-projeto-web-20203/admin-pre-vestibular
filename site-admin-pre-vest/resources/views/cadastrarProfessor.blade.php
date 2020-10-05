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
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
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
	<?php
	if (isset($_POST['disponibilidade'])) {
	  $disponibilidade = implode(', ', $_POST['disponibilidade']);
	} else {
	  $disponibilidade = "";
	}
	if (isset($_POST['areasAtuacao'])) {
	  $areasAtuacao = implode(', ', $_POST['areasAtuacao']);
	} else {
	  $areasAtuacao = "";
	} 
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
          <label>Disponibilidade</label>
          <div class="col-md-8">
              <input type="checkbox" name="disponibilidade[]" id="manha" value="Manhã" />Manhã
              <input type="checkbox" name="disponibilidade[]" id="tarde" value="Tarde" />Tarde
              <input type="checkbox" name="disponibilidade[]" id="noite" value="Noite" />Noite
          </div>
          @error('disponibilidade')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
          <br>
          <label>Áreas de atuação</label>
          <div class="col-md-8">
              <input type="checkbox" name="areasAtuacao[]" id="biologia" value="Biologia" />Biologia
              <input type="checkbox" name="areasAtuacao[]" id="espanhol" value="Espanhol" />Espanhol
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="filosofia" value="Filosofia" />Filosofia
              <input type="checkbox" name="areasAtuacao[]" id="fisica" value="Física" />Física
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="geografia" value="Geografia" />Geografia
              <input type="checkbox" name="areasAtuacao[]" id="historia" value="História" />História
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="ingles" value="Inglês" />Inglês
              <input type="checkbox" name="areasAtuacao[]" id="literatura" value="Literatura" />Literatura
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="matematica" value="Matemática" />Matemática
              <input type="checkbox" name="areasAtuacao[]" id="portugues" value="Português" />Português
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="quimica" value="Química" />Química
              <input type="checkbox" name="areasAtuacao[]" id="redacao" value="Redação" />Redação
	      <br>
              <input type="checkbox" name="areasAtuacao[]" id="sociologia" value="Sociologia" />Sociologia
          </div>
          @error('areasAtuacao')
          <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
	</form>
        <br>
        <input type="submit" value="Cadastrar" />
      </div>
    </form>
  </body>
</html>
