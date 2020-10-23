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
                <h3>Lista de Professores</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless justify-content-center" style="border-spacing: 0.5em">
                                <thead>
                                    <tr>
                                        <th>Nome Completo</th>
                                        <th>E-mail</th>
                                        <th>Telefone</th>
                                    </tr>
                                </thead>
                                @foreach($professores as $professor)
                                    <tbody>
                                        <tr>
                                            <td>{{$professor->nome}}</td>
                                            <td>{{$professor->email}}</td>
                                            <td>{{$professor->telefone}}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <br>
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
