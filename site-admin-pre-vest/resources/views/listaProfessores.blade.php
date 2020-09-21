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
            <thead>
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
		    @if($professor->ehVoluntario == true)
		        {{'Sim'}}
		    @else
			{{'Não'}}
		    @endif
                    </td>
                </tr>
	    </tbody>
            <thead>
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
		    $cont = 0;
		    @if($professor->dispoManha == true)
		        {{'Manhã'}}
			$cont = $cont + 1;
		    @endif
		    @if($professor->dispoTarde == true)
			@if($cont > 0)
		            {{', Tarde'}}
                        @else
                            {{'Tarde'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->dispoNoite == true)
			@if($cont > 0)
		            {{', Noite'}}
                        @else
                            {{'Noite'}}
			@endif
		    @endif
                    </td>
                    <td>
		    $cont = 0;
		    @if($professor->atuaBiologia == true)
		        {{'Biologia'}}
			$cont = $cont + 1;
		    @endif
		    @if($professor->atuaEspanhol == true)
			@if($cont > 0)
		            {{', Espanhol'}}
                        @else
                            {{'Espanhol'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaFilosofia == true)
			@if($cont > 0)
		            {{', Filosofia'}}
                        @else
                            {{'Filosofia'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaFisica == true)
			@if($cont > 0)
		            {{', Física'}}
                        @else
                            {{'Física'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaGeogragia == true)
			@if($cont > 0)
		            {{', Geografia'}}
                        @else
                            {{'Geografia'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaHistoria == true)
			@if($cont > 0)
		            {{', História'}}
                        @else
                            {{'História'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaIngles == true)
			@if($cont > 0)
		            {{', Inglês'}}
                        @else
                            {{'Inglês'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaLiteratura == true)
			@if($cont > 0)
		            {{', Literatura'}}
                        @else
                            {{'Literatura'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaMatematica == true)
			@if($cont > 0)
		            {{', Matemática'}}
                        @else
                            {{'Matemática'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaPortugues == true)
			@if($cont > 0)
		            {{', Português'}}
                        @else
                            {{'Português'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaQuimica == true)
			@if($cont > 0)
		            {{', Química'}}
                        @else
                            {{'Química'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaRedacao == true)
			@if($cont > 0)
		            {{', Redação'}}
                        @else
                            {{'Redação'}}
			    $cont = $cont + 1;
			@endif
		    @endif
		    @if($professor->atuaSociologia == true)
			@if($cont > 0)
		            {{', Sociologia'}}
                        @else
                            {{'Sociologia'}}
			@endif
		    @endif
                    </td>
                </tr>
	    </tbody>
            <thead>
                <tr>
                    <th>Cidade</th>
		    <th>Bairro</th>
                    <th>Rua</th>
                    <th>Número</th>
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
