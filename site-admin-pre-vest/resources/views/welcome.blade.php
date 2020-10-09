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
                <h3>Quem Somos?</h3>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col" align="justify">
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
                        <div class="col" align="justify">
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
            <footer class="row">
                @include('includes.footer')
            </footer>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </body>
</html>
