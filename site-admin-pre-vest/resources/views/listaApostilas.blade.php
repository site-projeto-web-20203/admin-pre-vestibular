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
            <br>
            <div class="card" align="center">
                <h3 align="center">Apostilas</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless", align="center", style="border-spacing: 0.5em">
                                <thead>
                                    <tr>
                                        <th>Disciplina</th>
                                        <th>Apostila</th>
                                        <th>Enviada Em</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($apostilas as $apostila)
                                        <tr>
                                            <td>{{$apostila->disciplina}}</td>
                                            <td>{{$apostila->nome_arq}}</td>
                                            <td>{{$apostila->created_at}}</td>
                                            <td><a href="/" class="btn btn-primary">Download</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
