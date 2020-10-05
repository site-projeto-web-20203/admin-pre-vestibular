<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar Professores</title>

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
	<h1 align="center">Listar Professores</h1>
    </head>
    <body>
        @foreach($professores as $professor)
        <table class="table table-striped", align="center", style="border-spacing: 0.5em">
            <thead align="center">
                <tr>
                    <th>Nome Completo</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Voluntário?</th>
               </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td>
                    {{$professor->nome}}
                    </td>
                    <td>
                    {{$professor->email}}
                    </td>
                    <td>
                    {{$professor->telefone}}
                    </td>
                    <td>
                    {{$professor->data_nascimento}}
                    </td>
                    <td>
                    {{$professor->ehVoluntario}}
                    </td>
                </tr>
	    </tbody>
            <thead align="center">
                <tr>
                    <th>Grau de Instrução</th>
		    <th>Disponibilidade</th>
                    <th>Áreas de Atuação</th>
               </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td>
                    {{$professor->grauInstrucao}}
                    </td>
                    <td>
                    {{$professor->disponibilidade}}
                    </td>
                    <td>
		    <td>
                    {{$professor->areasAtuacao}}
                    </td>
                </tr>
	    </tbody>
        </table>
	<br><br>
	@endforeach
    </body>
</html>
