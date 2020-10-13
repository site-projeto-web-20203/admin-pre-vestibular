<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0" align="center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container" align="center">
            <div class="card" align="center">
                <h3 align="center">Mensagens Recebidas</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            @foreach($mensagens as $mensagem)
                                <table class="table table-bordered", align="center", style="border-spacing: 0.5em">
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
                                <table class="table table-bordered", align="center", style="border-spacing: 0.5em">
                                    <tbody>
                                        <td>{{$mensagem->conteudo}}</td>
                                    </tbody>
                                </table>
                                <br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
