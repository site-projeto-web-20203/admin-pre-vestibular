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
    <h1 align="center">Lista de Alunos</h1>
    <div class="container pt-3">
      <div class="row">
        <div class="col">
          @foreach($alunos as $aluno)
          <table class="table table-striped", align="center", style="border-spacing: 0.5em">
            <thead>
              <tr>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->email}}</td>
                <td>{{$aluno->telefone}}</td>
                <td>{{$aluno->data_nascimento}}</td>
              </tr>
	    </tbody>
            <thead>
              <tr>
                <th>Já Fez ENEM?</th>
                <th>Nome da Escola</th>
		<th>Tipo de Escola</th>
                <th>Ano de Conclusão do EM</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$aluno->fez_enem}}</td>
                <td>{{$aluno->escola}}</td>
                <td>
		  @if($aluno->tipo_escola == true)
		    {{'Pública'}}
		  @else
		    {{'Particular'}}
		  @endif
                </td>
                <td>{{$aluno->ano_conclusao}}</td>
              </tr>
	    </tbody>
            <thead>
              <tr>
                <th>Nome do Responsável</th>
                <th>E-mail do Responsável</th>
                <th>Telefone do Responsável</th>
                <th>Cidade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$aluno->nome_responsavel}}</td>
                <td>{{$aluno->email_responsavel}}</td>
                <td>{{$aluno->telefone_responsavel}}</td>
                <td>{{$aluno->cidade}}</td>
              </tr>
	    </tbody>
            <thead>
              <tr>
		<th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$aluno->bairro}}</td>
                <td>{{$aluno->rua}}</td>
                <td>{{$aluno->numero}}</td>
                <td>{{$aluno->complemento}}</td>
              </tr>
	    </tbody>
          </table>
          <br><br>
	  @endforeach
        </div>
      </div>
    </div>
  </body>
</html>
