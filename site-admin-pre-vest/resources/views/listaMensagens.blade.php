<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar Mensagens</title>

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
	<h1 align="center">Listar Mensagens</h1>
    </head>
    <body>
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
                    <td>
                    {{$mensagem->remetente}}
                    </td>
                    <td>
                    {{$mensagem->email}}
                    </td>
                    <td>
                    {{$mensagem->data_envio}}
                    </td>
                </tr>
	    </tbody>
        </table>
        <p style="padding: 0 8em 0 8em">{{$mensagem->conteudo}}</p>
	<br><br>
        @endforeach
    </body>
</html>
