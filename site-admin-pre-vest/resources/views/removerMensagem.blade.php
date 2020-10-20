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
    <form method="POST" action="{{url('/remover/mensagem/'.$mensagem->id)}}">
        @csrf
        <div class="card" align="center">
            <h3 align="center">Remover Mensagem</h3>
            <div class="container pt-3" align="left">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered", align="center", style="border-spacing: 0.5em">
                                <thead>
                                <tr>
                                    <th>Remetente</th>
                                    <th>E-mail</th>
                                    <th>Recebida Em</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$mensagem->remetente}}</td>
                                    <td>{{$mensagem->email}}</td>
                                    <td>{{Carbon\Carbon::parse($mensagem->created_at)->format('d/m/Y - H:i')}}</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <td colspan="3">{{$mensagem->conteudo}}</td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Remover" />
            </div>
        </div>
    </form>
</div>
<br>
<div class="container-fluid p-0" align="center">
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
