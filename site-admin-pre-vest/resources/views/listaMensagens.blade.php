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
    <h1 align="center">Mensagens Recebidas</h1>
    <div class="container pt-3">
      <div class="row">
        <div class="col">
          @foreach($mensagens as $mensagem)
          <table class="table table-striped", align="center", style="border-spacing: 0.5em">
            <thead>
              <tr>
                <th>Remetente</th>
                <th>E-mail</th>
                <th>Enviada Em</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$mensagem->remetente}}</td>
                <td>{{$mensagem->email}}</td>
                <td>{{$mensagem->created_at}}</td>
              </tr>
	    </tbody>
          </table>
          <table class="table table-striped", align="center", style="border-spacing: 0.5em">
            <tbody>
              <tr>
                <td>{{$mensagem->conteudo}}</td>
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
