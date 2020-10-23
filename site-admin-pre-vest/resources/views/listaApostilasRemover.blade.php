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
                <h3>Apostilas</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless justify-content-center" style="border-spacing: 0.5em">
                                <thead>
                                    <tr>
                                        <th>Enviada Em</th>
                                        <th>Disciplina</th>
                                        <th>Apostila</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($apostilas as $apostila)
                                        <tr>
                                            <td>{{Carbon\Carbon::parse($apostila->created_at)->format('d/m/Y - H:i')}}</td>
                                            <td>{{$apostila->disciplina}}</td>
                                            <td>{{$apostila->nome_arq}}</td>
                                            <td><a href="{{url('/download/apostila/'.$apostila->id)}}" class="btn btn-primary">Download</a></td>
                                            <td><a href="{{url('/remover/apostila/'.$apostila->id)}}" class="btn btn-primary">Remover</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
