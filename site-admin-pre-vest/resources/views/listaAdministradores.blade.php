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
    <h1 align="center">Lista de Administradores</h1>
    <div class="container pt-3">
      <div class="row">
        <div class="col">
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
              @foreach($administradores as $administrador)
              <tr>
                <td>{{$administrador->nome}}</td>
                <td>{{$administrador->email}}</td>
                <td>{{$administrador->telefone}}</td>
                <td>{{$administrador->data_nascimento}}</td>
              </tr>
	      @endforeach
	    </tbody>
        </table>
    </body>
</html>
