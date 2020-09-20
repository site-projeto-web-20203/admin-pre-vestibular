<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar Alunos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
	<h1 align="center">Listar Alunos</h1>
    </head>
    <body>
        @foreach($alunos as $aluno)
        <table class="table table-striped" align="center">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Já Fez ENEM?</th>
               </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td>
                    {{$aluno->nome}}
                    </td>
                    <td>
                    {{$aluno->email}}
                    </td>
                    <td>
                    {{$aluno->telefone}}
                    </td>
                    <td>
                    {{$aluno->data_nascimento}}
                    </td>
                    <td>
		    @if($aluno->fez_enem == true)
		        {{'sim'}}
		    @else
			{{'não'}}
		    @endif
                    </td>
                </tr>
	    </tbody>
            <thead>
                <tr>
                    <th>Nome da Escola</th>
		    <th>Tipo de Escola</th>
                    <th>Ano de Conclusão do EM</th>
                    <th>Nome do Responsável</th>
                    <th>E-mail do Responsável</th>
                    <th>Telefone do Responsável</th>
               </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td>
                    {{$aluno->escola}}
                    </td>
                    <td>
		    @if($aluno->tipo_escola == true)
		        {{'publica'}}
		    @else
			{{'particular'}}
		    @endif
                    </td>
                    <td>
                    {{$aluno->ano_conclusao}}
                    </td>
                    <td>
                    {{$aluno->nome_responsavel}}
                    </td>
                    <td>
                    {{$aluno->email_responsavel}}
                    </td>
                    <td>
                    {{$aluno->telefone_responsavel}}
                    </td>
                </tr>
	    </tbody>
            <thead>
                <tr>
                    <th>Cidade</th>
		    <th>Bairro</th>
                    <th>Rua</th>
                    <th>Numero</th>
                    <th>Complemento</th>
               </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td>
                    {{$aluno->cidade}}
                    </td>
                    <td>
                    {{$aluno->bairro}}
                    </td>
                    <td>
                    {{$aluno->rua}}
                    </td>
                    <td>
                    {{$aluno->numero}}
                    </td>
                    <td>
                    {{$aluno->complemento}}
                    </td>
                </tr>
	    </tbody>
        </table>
	<br><br>
	@endforeach
    </body>
</html>
