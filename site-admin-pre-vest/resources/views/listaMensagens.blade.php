<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container" align="center">
            <header class="row">
                @include('includes.header')
            </header>
            <h1 align="center">Mensagens Recebidas</h1>
            <br>
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
                                    <td>{{$mensagem->conteudo}}</td>
                                </tbody>
                            </table>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
