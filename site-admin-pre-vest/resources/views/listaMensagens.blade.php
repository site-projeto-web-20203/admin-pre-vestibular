<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0 justify-content-center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <h3>Mensagens Recebidas</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless justify-content-center" style="border-spacing: 0.5em">
                                <thead>
                                    <tr>
                                        <th>Remetente</th>
                                        <th>E-mail</th>
                                        <th>Recebida Em</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @foreach($mensagens as $mensagem)
                                    <tbody>
                                        <tr>
                                            <td>{{$mensagem->remetente}}</td>
                                            <td>{{$mensagem->email}}</td>
                                            <td>{{Carbon\Carbon::parse($mensagem->created_at)->format('d/m/Y - H:i')}}</td>
                                            <td><a href="{{url('/admin/visualizar/mensagem/'.$mensagem->id)}}" class="btn btn-primary">Visualizar</a></td>
                                            <td><a href="{{url('/remover/mensagem/'.$mensagem->id)}}" class="btn btn-primary">Remover</a></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0 justify-content-center">
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>
