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
                <h3>Quem Somos?</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col txt" align="justify">
                            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                pellentesque elementum leo, sed pharetra neque tristique sed.
                                Vestibulum ac fringilla eros. Cras rhoncus nibh sit amet metus
                                varius, ac ullamcorper tellus suscipit. Nam ornare lectus vitae
                                mauris mollis feugiat. Vestibulum finibus ultricies fermentum.
                                Quisque finibus faucibus ipsum pulvinar dapibus. Aenean a
                                dapibus elit, et aliquet nulla. Morbi sit amet lacus eget quam
                                vestibulum viverra. Aenean euismod arcu ac sapien rutrum, id
                                bibendum nisi pharetra.</a>
                        </div>
                        <div class="col txt" align="justify">
                            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                pellentesque elementum leo, sed pharetra neque tristique sed.
                                Vestibulum ac fringilla eros. Cras rhoncus nibh sit amet metus
                                varius, ac ullamcorper tellus suscipit. Nam ornare lectus vitae
                                mauris mollis feugiat. Vestibulum finibus ultricies fermentum.
                                Quisque finibus faucibus ipsum pulvinar dapibus. Aenean a
                                dapibus elit, et aliquet nulla. Morbi sit amet lacus eget quam
                                vestibulum viverra. Aenean euismod arcu ac sapien rutrum, id
                                bibendum nisi pharetra.</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card" align="center">
                <h3>O Que Podemos Oferecer?</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col txt" align="justify">
                            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                pellentesque elementum leo, sed pharetra neque tristique sed.
                                Vestibulum ac fringilla eros. Cras rhoncus nibh sit amet metus
                                varius, ac ullamcorper tellus suscipit. Nam ornare lectus vitae
                                mauris mollis feugiat. Vestibulum finibus ultricies fermentum.
                                Quisque finibus faucibus ipsum pulvinar dapibus. Aenean a
                                dapibus elit, et aliquet nulla. Morbi sit amet lacus eget quam
                                vestibulum viverra. Aenean euismod arcu ac sapien rutrum, id
                                bibendum nisi pharetra.</a>
                        </div>
                        <div class="col txt" align="justify">
                            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                pellentesque elementum leo, sed pharetra neque tristique sed.
                                Vestibulum ac fringilla eros. Cras rhoncus nibh sit amet metus
                                varius, ac ullamcorper tellus suscipit. Nam ornare lectus vitae
                                mauris mollis feugiat. Vestibulum finibus ultricies fermentum.
                                Quisque finibus faucibus ipsum pulvinar dapibus. Aenean a
                                dapibus elit, et aliquet nulla. Morbi sit amet lacus eget quam
                                vestibulum viverra. Aenean euismod arcu ac sapien rutrum, id
                                bibendum nisi pharetra.</a>
                        </div>
                    </div>
                    <br><a href="{{ url('/cadastrar/aluno') }}" class="btn2 btn">Quero Participar!</a><br>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid p-0" align="center">
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
